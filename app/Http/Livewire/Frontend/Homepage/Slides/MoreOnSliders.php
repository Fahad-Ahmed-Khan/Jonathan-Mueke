<?php

namespace App\Http\Livewire\Frontend\Homepage\Slides;

use App\Models\Backend\AdminSliders;
use Livewire\Component;

class MoreOnSliders extends Component
{
    public AdminSliders $slider;

    public function render()
    {
        return view('livewire.frontend.homepage.slides.more-on-sliders')
            ->extends('layouts.frontend');
    }
}
