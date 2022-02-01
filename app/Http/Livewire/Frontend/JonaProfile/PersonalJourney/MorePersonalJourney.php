<?php

namespace App\Http\Livewire\Frontend\JonaProfile\PersonalJourney;

use Livewire\Component;

class MorePersonalJourney extends Component
{
    public function render()
    {
        return view('livewire.frontend.jona-profile.personal-journey.more-personal-journey')
                ->extends('layouts.frontend');
    }
}
