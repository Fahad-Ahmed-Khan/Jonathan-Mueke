<?php

namespace App\Http\Livewire\Backend\Gallery;

use App\Models\Backend\GallerySettings as BackendGallerySettings;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class VideoSettings extends Component
{
    public $gallery_title,$image,$description, $gallery_id, $images=[];

    public function resetInputs()
    {
        $this->gallery_title=NULL;
        $this->image=NULL;
        $this->description=NULL;
    }
    public function validatInputs()
    {
        $this->validate([
            'gallery_title' => ['nullable'],
            'image' => ['required'],
            'description' => ['required'],
        ]);
    }
    public function store()
    {
        //call validation method
        $this->validatInputs();
        //save to table
        BackendVideoSettings::create([
            'gallery_title' => $this->gallery_title,
            'image' => $this->image,
            'description' => $this->description,
            'created_by' => Auth::user()->name

        ]);
        //reset all inputs fields after saving
        $this->resetInputs();
        $this->emit('closeGalleryCreationModal');
        session()->flash('gallery_message','Image Added Successfully');

    }

}
