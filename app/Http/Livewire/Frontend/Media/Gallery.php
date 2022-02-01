<?php

namespace App\Http\Livewire\Frontend\Media;

use Livewire\Component;

class Gallery extends Component
{
    public function render()
    {
        return view('livewire.frontend.media.gallery')
                    ->extends('layouts.frontend');
    }
}
