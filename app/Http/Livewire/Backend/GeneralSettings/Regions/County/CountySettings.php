<?php

namespace App\Http\Livewire\Backend\GeneralSettings\Regions\County;

use App\Exports\CountyExport;
use App\Imports\CountyImport;
use App\Models\Backend\County;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use PDF;
use Dompdf\Options;
use Maatwebsite\Excel\Facades\Excel;

class CountySettings extends Component
{
    public $name, $code;
    public $county_id, $constituency_id;


    public function resetInputs()
    {
        $this->name=NULL;
        $this->code=NULL;
    }

    public function store()
    {
        $this->validate([
            'name' => ['required','unique:counties'],
            'code' => ['required','unique:counties'],
        ]);
        County::create([
            'name' => $this->name,
            'code' => $this->code,
            'updated_by' =>Auth::user()->name
        ]);
        $fetchCountyName = $this->name;
        $this->resetInputs();
        session()->flash('county_added_message',"$fetchCountyName County Added successfuly 👍");
        $this->emit('countyCreate');

    }
    public function edit($id)
    {
        $findCountyId = County::where('id', $id)->first();
        $this->county_id = $findCountyId->id;
        $this->name = $findCountyId->name;
        $this->code = $findCountyId->code;
    }

    public function update()
    {
        $this->validate([
            'name' => ['required'],
            'code' => ['required'],
        ]);
        if($this->county_id)
        {
            $updateCounty = County::find($this->county_id);
            $updateCounty->update([
                'name' => $this->name,
                'code' => $this->code,
                'updated_by' =>Auth::user()->name
            ]);
            $this->resetInputs();
            $this->emit('countyUpdate');
        }
    }
    public function showDeleteConfirmation(County $counties)
    {
        $this->county_id = $counties->id;
        $this->name = $counties->name;
        $this->code = $counties->code;
    }

    public function destroy()
    {
        if($this->county_id)
        {
            County::find($this->county_id) ->delete();
            $countyName = $this->name;
            $this->emit('hideDeleteModal');
            session()->flash('county-delete-message',"$countyName County Deleted successfuly");

        }
    }

    //County import excel file
    public function countyImport(Request $request)
    {
        Excel::import(new CountyImport, $request->file('file'));
        return back();
    }

    public function countyExport()
    {
        return Excel::download(new CountyExport, 'county-collection.xlsx');
    }
    public function exportPDF()
    {

        $showAll = [
            'downloadCounty' => County::all(),
            'currentDate' => Carbon::now()
        ];
        $options = new Options();
        $options->setIsRemoteEnabled(true);
        $options->setIsHtml5ParserEnabled(true);
        PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        $options =PDF::loadView('livewire.backend.general-settings.regions.county.download-pdf', compact('showAll'))
                ->setPaper('a4', 'portrait')
                ->setWarnings(false)
                ->output();

        // return $options->download('applicants.pdf');
        return response()->streamDownload(
            fn () => print($options),
            "county-downloads.pdf"
       );
    }

    public function render()
    {
        $showAll = [
            'showCounties' =>County::withCount(['constituencies','volunteers'])->get(),
            'countCounty' =>  County::count(),
        ];
        return view('livewire.backend.general-settings.regions.county.county-settings',
                compact('showAll'));
    }
}
