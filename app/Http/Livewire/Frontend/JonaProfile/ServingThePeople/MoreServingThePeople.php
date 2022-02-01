<?php

namespace App\Http\Livewire\Frontend\JonaProfile\ServingThePeople;

use App\Models\Backend\Events;
use Livewire\Component;
use Livewire\WithPagination;

class MoreServingThePeople extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $fetchAllInArray = [
            'recent-events' => Events::latest()->limit(1)->get(),
            'other-events-top' =>Events::latest()->paginate(2)
        ];
        return view('livewire.frontend.jona-profile.serving-the-people.more-serving-the-people', 
                compact('fetchAllInArray'))
                ->extends('layouts.frontend');
    }
}
