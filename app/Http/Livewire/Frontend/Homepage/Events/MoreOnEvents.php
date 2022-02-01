<?php

namespace App\Http\Livewire\Frontend\Homepage\Events;

use App\Models\Backend\Events;
use Livewire\Component;

class MoreOnEvents extends Component
{
    public Events $event;
    
    public function render()
    {
        return view('livewire.frontend.homepage.events.more-on-events')
                    ->extends('layouts.frontend');
    }
}
