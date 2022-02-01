<?php

namespace App\Http\Livewire\Backend\Gallery;

use App\Models\Backend\AdminSliders;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class Gallery extends Component
{

    use WithFileUploads;

    public $title, $description, $gallery_id, $images = [];

    public function render()
    {
        $showInArray = [
            'fetchGalleries' => \App\Models\Gallery::latest()->get(),
        ];
        return view('livewire.backend.gallery.gallery',
            compact('showInArray'))
            ->extends('layouts.backend');
    }

    public function resetInputs()
    {
        $this->title = NULL;
        $this->description = NULL;
    }

    public function validateFields()
    {

        $this->validate([
            'title' => ['required'],
            'description' => ['required'],
            'images' => ['required'],
        ]);
    }

    public function store()
    {
        $this->validateFields();

        foreach ($this->images as $key => $image) {
            $this->images[$key] = $image->store('gallery','public');
        }

        $album = \App\Models\Gallery::create([
            'title' => $this->title,
            'description' => $this->description,
        ]);

        foreach ($this->images as $image) {
            $album->images()->create(['image' => $image]);
        }
        $this->resetInputs();
        $this->emit('closeSliderCreateModal');
        session()->flash('message', 'Slider added successfuly');
    }

    public function edit($id)
    {
        $findSliderById = AdminSliders::where('id', $id)->first();

        $this->gallery_id = $findSliderById->id;
        $this->title = $findSliderById->title;
        $this->description = $findSliderById->description;
    }


    public function update()
    {
        // $this->validateFields();
        if ($this->gallery_id) {
            $updateSlider = AdminSliders::find($this->gallery_id);
            $updateSlider->update([
                'title' => $this->title,
                'description' => $this->description

            ]);
            $this->resetInputs();
            $this->emit('closeSliderEditModal');
            session()->flash('message', 'Slider updated successfuly');


        }
    }

    public function updateImage()
    {
        if ($this->gallery_id) {

            $this->validate([
                'cover_image' => ['required', 'image']
            ]);
            $filename = $this->cover_image->store('sliders', 'public');

            $updateSlider = AdminSliders::find($this->gallery_id);
            $updateSlider->update([
                'cover_image' => $filename,
            ]);

            session()->flash('slider_image_updation', 'Slider Image updated successfully');
        }
    }

    public function deleteConfirmaton(AdminSliders $slider)
    {
        $this->gallery_id = $slider->id;
        $this->title = $slider->title;
    }

    public function destroy()
    {
        AdminSliders::find($this->gallery_id)->delete();
        $this->emit('closeSlidersDeleteModal');
        session()->flash('message', '😓 Slider and its related Data Moved to Trash');

    }

    public function viewFileModal(AdminSliders $slider)
    {
        $this->gallery_id = $slider->id;
        $this->title = $slider->title;
        $this->description = $slider->description;
        $this->cover_image = $slider->cover_image;
    }
}
