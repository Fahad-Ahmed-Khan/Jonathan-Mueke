<?php

namespace App\Http\Livewire\Backend\GeneralSettings\Volunteer;

use App\Http\Livewire\Frontend\ModalForms\Volunteer;
use App\Models\Backend\Constituency;
use App\Models\Backend\County;
use App\Models\Backend\VolunteerCategory;
use App\Models\Backend\Volunteers;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use PDF;
use Dompdf\Options;

class VolunteerSettings extends Component
{
    public $name,$email,$phone,$gender,$county_id,$constituency_id,$volunteer_category_id;
    public $selectAll=false;
    public $selectedVolunteers=[];
    public $bulkDisabled = true;
    public $selectedCounty =NULL;
    public $counties,$constituencies, $volunteer_id;

    
    public function mount()
    {
        $this->counties= County::all();
        $this->constituencies = collect();
    }
    
    public function resetInput()
    {
        $this->name= NULL;
        $this->email= NULL;
        $this->phone = NULL;
        $this->gender = NULL;
        $this->county_id= NULL;
        $this->constituency_id= NULL;
        $this->volunteer_category_id= NULL;
    }
    public function validateInputs()
    {
        $this->validate( [
            'name' => ['required'],
            'email' => ['required','unique:volunteers'],
            'phone' => ['required', 'unique:volunteers'],
            'gender' => ['required'],
            'selectedCounty' => ['required'],
            'constituency_id' => ['required'],
            'volunteer_category_id' => ['required']
        ]);
    }
    public function store()
    {
        $this->validateInputs();
        Volunteers::create( [
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'gender' => $this->gender,
            'county_id' => $this->selectedCounty,
            'constituency_id' => $this->constituency_id,
            'volunteer_category_id' => $this->volunteer_category_id,
        ]);
        $this->emit('hideCreateVolunteerModal');
        session()->flash('volunteer_message','Volunteer data updated successfully.');

    }
    public function updatedSelectedCounty($county)
    {
        if(!is_null($county))
        {
            $this->constituencies = Constituency::where('county_id', $county)->get();
            
        }
    }

    public function modalViewVolunteer(Volunteer $volunteer)
    {
        $this->volunteer_id = $volunteer->id;
        $this->name = $volunteer->name;
        $this->email = $volunteer->email;
        $this->phone = $volunteer->phone;
        $this->gender = $volunteer->gender;
        $this->selectedCounty = $volunteer->county_id;
        $this->constituency_id = $volunteer->constituency_id;
        $this->volunteer_category_id = $volunteer->volunteer_category_id;
    }
    public function edit($id)
    {
        $findVolunteerById = Volunteers::where('id', $id)->first();
        $this->volunteer_id = $findVolunteerById->id;
        $this->name = $findVolunteerById->name;
        $this->email = $findVolunteerById->email;
        $this->phone = $findVolunteerById->phone;
        $this->gender = $findVolunteerById->gender;
        $this->selectedCounty = $findVolunteerById->county_id;
        $this->constituency_id = $findVolunteerById->constituency_id;
        $this->volunteer_category_id = $findVolunteerById->volunteer_category_id;
    }

    public function update()
    {
        $this->validateInputs();
        if($this->volunteer_id)
        {
            $updateVolunteer = Volunteers::find($this->volunteer_id);
            $updateVolunteer->update([
                'name' => $this->name,
                'email' =>  $this->email,
                'phone' => $this->phone,
                'gender' => $this->gender,
                'county_id' => $this->selectedCounty,
                'constituency_id' => $this->constituency_id,
                'volunteer_category_id' => $this->volunteer_category_id,
                'created_by' => Auth::user()->name
            ]);
            $this->resetInput();
            $this->emit('hideUpdateVolunteerModal');
            session()->flash('volunteer_message','Volunteer data updated successfully.');
        }
    }
    public function showDeleteConfirmation(Volunteers $volunteer)
    {
        $this->volunteer_id = $volunteer->id;
        $this->name = $volunteer->name;
    }
    public function destroy()
    {
       try {
           if($this->volunteer_id)
           {
               Volunteers::find($this->volunteer_id)->delete();
               $this->emit('hideDeleteVolunteerModal');
               session()->flash('volunteer_message','Volunteer Deleted Successfully.');
           }
       } catch (\Throwable $th) {
           throw $th;
       }

    }

    public function deleteSelected()
    {
        Volunteers::query()
                ->whereIn('id', $this->selectedVolunteers)
                ->delete();
            $this->selectedVolunteers =[];
            $this->selectAll=false;
    }

    public function exportPDF()
    {
        $showAll = [
            'downloadVolunteers' => Volunteers::all(),
            'currentDate' => Carbon::now()
        ];
        $options = new Options();
        $options->setIsRemoteEnabled(true);
        $options->setIsHtml5ParserEnabled(true);
        PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        $options =PDF::loadView('livewire.backend.general-settings.volunteer.download-pdf', compact('showAll'))
                ->setPaper('a4', 'portrait')
                ->setWarnings(false)
                ->output();

        // return $options->download('applicants.pdf');
        return response()->streamDownload(
            fn () => print($options),
            "volunteers.pdf"
       );
    }
    public function render()
    {
        $this->bulkDisabled = count($this->selectedVolunteers) <1;
        
        $showVolunteer = [
            'volunteers' => Volunteers::latest()->get(),
            'categories' => VolunteerCategory::all(),
            'constituencies' => Constituency::all()
        ];
        return view('livewire.backend.general-settings.volunteer.volunteer-settings', 
                    compact('showVolunteer'))
                    ->extends('layouts.backend');
    }
}
