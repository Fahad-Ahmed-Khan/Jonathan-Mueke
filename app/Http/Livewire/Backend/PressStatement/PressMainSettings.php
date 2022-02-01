<?php

namespace App\Http\Livewire\Backend\PressStatement;

use Livewire\Component;

class PressMainSettings extends Component
{
    public $press_title,$cover_image,$image_link, $description;
    
    public function render()
    {
        return view('livewire.backend.press-statement.main-settings')
                ->extends('layouts.backend');
    }
}
