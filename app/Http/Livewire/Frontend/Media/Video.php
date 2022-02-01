<?php

namespace App\Http\Livewire\Frontend\Media;

use App\Models\Backend\VideoSettings;
use Livewire\Component;

class Video extends Component
{
    public function render()
    {
        $showVideo = [
            'recent-video' => VideoSettings::latest()->limit(1)->get(),
            'more-video' => VideoSettings::latest()->get(),
        ];
        return view('livewire.frontend.media.video', 
                compact('showVideo'))
                ->extends('layouts.frontend');
    }
}
