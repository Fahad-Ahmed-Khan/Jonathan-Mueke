<?php

namespace App\Http\Livewire\Frontend\JonaProfile;

use App\Models\Backend\Events;
use Livewire\Component;
use Livewire\WithPagination;

class PoliticalJourney extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    
    public function render()
    {
        $fetchAllInArray = [
            'recent-events' => Events::latest()->limit(1)->get(),
            'other-events-top' =>Events::latest()->paginate(2)
        ];
        return view('livewire.frontend.jona-profile.political-journey',
                compact('fetchAllInArray'))
                ->extends('layouts.frontend');
    }
}
