<?php

namespace App\Http\Livewire\Frontend\ModalForms;

use App\Models\Backend\Constituency;
use App\Models\Backend\County;
use App\Models\Backend\VolunteerCategory;
use App\Models\Backend\Volunteers;
use Livewire\Component;

class Volunteer extends Component
{
    public $name,$email,$phone,$county_id,$constituency_id,$volunteer_category_id;
    
    public $selectedCounty =NULL;
    public $counties,$constituencies;

    
    public function mount()
    {
        $this->counties= County::all();
        $this->constituencies = collect();
    }

    public function updatedSelectedCounty($county)
    {
        if(!is_null($county))
        {
            $this->constituencies = Constituency::where('county_id', $county)
                ->get();
            
        }
    }

    public function resetInput()
    {
        $this->name= NULL;
        $this->email= NULL;
        $this->phone = NULL;
        $this->county_id= NULL;
        $this->constituency_id= NULL;
        $this->volunteer_category_id= NULL;
    }
    public function validateInputs()
    {
        $this->validate( [
            'name' => ['required'],
            'email' => ['required'],
            'phone' => ['required'],
            'selectedCounty' => ['required'],
            'constituency_id' => ['required'],
            'volunteer_category_id' => ['required']
        ]);
    }
    
    public function storeVolunteers()
    {
        $this->validateInputs();
        Volunteers::create( [
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'county_id' => $this->selectedCounty,
            'constituency_id' => $this->constituency_id,
            'volunteer_category_id' => $this->volunteer_category_id,
        ]);

    }
   
    public function render()
    {
        $showAllInArray = [
            'volunteerCategory' => VolunteerCategory::latest()->get()
        ];
        return view('livewire.frontend.modal-forms.volunteer', compact('showAllInArray'))
                ->extends('layouts.frontend');
    }
}
