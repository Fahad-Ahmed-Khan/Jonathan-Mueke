<?php

namespace App\Http\Livewire\Frontend\JonaProfile\MuekeStory;

use App\Models\Mueke;
use Livewire\Component;
use Livewire\WithPagination;
class MuekesStory extends Component
{
	use WithPagination;
    public function render()
    {
		//$muekes = Mueke::paginate(5);
        return view('livewire.frontend.jona-profile.mueke-story.muekes-story')
		 ->extends('layouts.frontend');
    }
}
