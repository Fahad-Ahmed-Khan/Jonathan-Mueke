<?php

namespace App\Http\Livewire\Frontend\Homepage;

use App\Models\Backend\AdminSliders;
use App\Models\Backend\Agenda;
use App\Models\Backend\Events;
use Livewire\Component;
use Livewire\WithPagination;

class HomePageSetting extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    public $name, $agenda,$agenda_title ;

     // display more on our Agenda
     public function displayMoreOnAgenda(Agenda $agenda)
     {
        $this->agenda_id = $agenda->id;
        $this->agenda_title = $agenda->agenda_title;
        $this->description = $agenda->description;
        $this->cover_image = $agenda->cover_image;

        // redirect()->route();

        return view('livewire.frontend.homepage.agendas.more.');
     }

    public function render()
    {

        $fetchAllInArray = [
            'sliders' => AdminSliders::latest()->get(),
            'agenda' => Agenda::all(),
            'recent-events' => Events::latest()->limit(1)->get(),
            'other-events-top' => Events::latest()->paginate(2)
        ];
        return view('livewire.frontend.homepage.welcome',
            compact('fetchAllInArray'));
       // ->extends('layouts.frontend')
    }
}
