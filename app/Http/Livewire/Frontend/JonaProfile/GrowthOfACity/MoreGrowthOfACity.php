<?php

namespace App\Http\Livewire\Frontend\JonaProfile\GrowthOfACity;

use Livewire\Component;

class MoreGrowthOfACity extends Component
{
    public function render()
    {
        return view('livewire.frontend.jona-profile.growth-of-a-city.more-growth-of-a-city')
                    ->extends('layouts.frontend');
    }
}
