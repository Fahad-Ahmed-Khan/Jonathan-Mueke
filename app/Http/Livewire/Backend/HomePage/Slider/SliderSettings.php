<?php

namespace App\Http\Livewire\Backend\HomePage\Slider;

use App\Models\Backend\AdminSliders;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class SliderSettings extends Component
{
    use WithFileUploads;
    public $slider_tag,$slider_title,$cover_image,$description, $slider_id;

    public function resetInputs()
    {
        $this->slider_title = NULL;
        $this->slider_tag= NULL;
        $this->description = NULL;
    }
    public function validateFields()
    {

        $this->validate([
            'slider_title' => ['required'],
            'description'  => ['required'],
            'slider_tag' => ['nullable'],
            'cover_image' => ['required','file','mimes:jpg,png,jpeg'],
        ]);
    }

    public function store()
    {
        $this->validateFields();



        AdminSliders::create([
            'slider_title' => $this->slider_title,
            'description' => $this->description,
            'slider_tag' => $this->slider_tag,
            'cover_image' => $this->cover_image->store('sliders','public'),
            'created_by' => Auth::user()->name,
        ]);
        $this->resetInputs();
        $this->emit('closeSliderCreateModal');
        session()->flash('message', 'Slider added successfuly');
    }

    public function edit($id)
    {
        $findSliderById = AdminSliders::where('id', $id)->first();

        $this->slider_id = $findSliderById->id;
        $this->slider_title = $findSliderById->slider_title;
        $this->description = $findSliderById->description;
        $this->slider_tag = $findSliderById->slider_tag;
    }


    public function update()
    {
        // $this->validateFields();
        if($this->slider_id)
        {
                $updateSlider = AdminSliders::find($this->slider_id);
                $updateSlider->update([
                'slider_title' => $this->slider_title,
                'description' => $this->description,
                'slider_tag' => $this->slider_tag,
                'created_by' => Auth::user()->name,

            ]);
            $this->resetInputs();
            $this->emit('closeSliderEditModal');
            session()->flash('message', 'Slider updated successfuly');


        }
    }
    public function updateImage()
    {
        if($this->slider_id)
        {

            $this->validate([
                'cover_image' => ['required','image']
            ]);
            $filename = $this->cover_image->store('sliders','public');

            $updateSlider = AdminSliders::find($this->slider_id);
                $updateSlider->update([
                    'cover_image' => $filename,
                ]);

            session()->flash('slider_image_updation', 'Slider Image updated successfully');
        }
    }
    public function deleteConfirmaton(AdminSliders $slider)
    {
        $this->slider_id = $slider->id;
        $this->slider_title = $slider->slider_title;
    }
    public function destroy()
    {
        AdminSliders::find($this->slider_id)->delete();
        $this->emit('closeSlidersDeleteModal');
        session()->flash('message', '😓 Slider and its related Data Moved to Trash');

    }

    public function viewFileModal(AdminSliders $slider)
    {
        $this->slider_id = $slider->id;
        $this->slider_title = $slider->slider_title;
        $this->description = $slider->description;
        $this->cover_image = $slider->cover_image;
    }
    public function render()
    {
        $showInArray = [
            'fetchSliders' => AdminSliders::latest()->get(),
        ];
        return view('livewire.backend.home-page.slider.slider-settings',
               compact('showInArray'))
               ->extends('layouts.backend');
    }
}
