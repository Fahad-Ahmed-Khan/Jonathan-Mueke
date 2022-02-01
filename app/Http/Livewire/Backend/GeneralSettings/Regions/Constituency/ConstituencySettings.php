<?php

namespace App\Http\Livewire\Backend\GeneralSettings\Regions\Constituency;

use App\Exports\ConstituencyExport;
use App\Models\Backend\Constituency;
use App\Models\Backend\County;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use PDF;
use Dompdf\Options;
use Maatwebsite\Excel\Facades\Excel;

class ConstituencySettings extends Component
{
    public $name;
    public $county_id, $constituency_id;

    public function resetInputs()
    {
        $this->name=NULL;
    }

    public function store()
    {
        $this->validate([
            'name' => ['required','unique:constituencies'],
            'county_id' => ['required'],
        ]);
        Constituency::create([
            'name' => $this->name,
            'county_id' => $this->county_id,
        ]);
        $this->resetInputs();
        $this->emit('countyCreate');

    }
    public function edit($id)
    {
        $findConstituencyById = Constituency::where('id', $id)->first();
        $this->constituency_id = $findConstituencyById->id;
        $this->county_id = $findConstituencyById->county_id;
        $this->name = $findConstituencyById->name;
    }

    public function update()
    {
        $this->validate([
            'name' => ['required'],
            'county_id' => ['required'],
        ]);
        if($this->constituency_id)
        {
            $updateConstituency = Constituency::find($this->constituency_id);
            $updateConstituency->update([
                'name' => $this->name,
                'county_id' => $this->county_id,
                'updated_by' =>Auth::user()->name
            ]);
            $this->resetInputs();
            $nameConstituency = $this->name;
            // dd($nameConstituency);
            $this->emit('countyUpdate');
            session()->flash('constituency_updation', "$nameConstituency updated Successfuly. ");
        }
    }
    public function showDeleteConfirmation(Constituency $constituency)
    {
        $this->constituency_id = $constituency->id;
        $this->name = $constituency->name;
        $this->county_id = $constituency->county_id;
        
    }

    public function destroy()
    {
        if($this->constituency_id)
        {
            Constituency::find($this->constituency_id) ->delete();
            $constName = $this->name;
            $this->emit('hideDeleteModal');
            session()->flash('constituency_deletion', " $constName moved to trash." );

        }
    }

    public function constituencyExport()
    {
        return Excel::download(new ConstituencyExport, 'constituency.xlsx');
    }

    public function exportPDF()
    {

        $showAll = [
            'downloadConstituency' => Constituency::all(),
            'currentDate' => Carbon::now()
        ];
        $options = new Options();
        $options->setIsRemoteEnabled(true);
        $options->setIsHtml5ParserEnabled(true);
        PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        $options =PDF::loadView('livewire.backend.general-settings.regions.constituency.download-pdf', compact('showAll'))
                ->setPaper('a4', 'portrait')
                ->setWarnings(false)
                ->output();

        // return $options->download('applicants.pdf');
        return response()->streamDownload(
            fn () => print($options),
            "region-constituency-downloads.pdf"
       );
    }
    public function render()
    {
        $showConstituencyInArray = [
            'county' => County::all(),
            'constituency' => Constituency::withCount(['county','volunteers'])->get(),
            'constituencyCount' => Constituency::count(),
        ];
        return view('livewire.backend.general-settings.regions.constituency.constituency-settings',
                compact('showConstituencyInArray'));
    }
}
