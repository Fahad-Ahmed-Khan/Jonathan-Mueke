<?php

namespace App\Http\Livewire\Backend\HomePage\JonaStory;

use App\Models\Backend\Story;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class StorySettings extends Component
{
    use WithFileUploads;
    public $title,$cover_image,$description, $story_id;
   
    public function resetInputs()
    {
        $this->title = NULL;
        $this->cover_image = NULL;
        $this->description = NULL;
    }
    public function validateFields()
    {

        $this->validate([
            'title' => ['required'],
            'description'  => ['required'],
            'cover_image' => ['required','image','mimes:jpg,png,jpeg'],
        ]);
    }

    public function store()
    {
        $this->validateFields();
        Story::create([
            'title' => $this->title,
            'description' => $this->description,
            'cover_image' => $this->cover_image->store('jonastory','public'),
            'created_by' => Auth::user()->name,
        ]);
        $this->resetInputs();
        $this->emit('closeDownloadsCreateModal');
        session()->flash('message', 'Story added successfuly');
    }

    public function edit($id)
    {
        $findSliderById = Story::where('id', $id)->first();

        $this->story_id = $findSliderById->id;
        $this->title = $findSliderById->title;
        $this->description = $findSliderById->description;
    }   


    public function update()
    {
        // $this->validateFields();
        if($this->story_id)
        {
                $updateStory = Story::find($this->story_id);
                $updateStory->update([
                'title' => $this->title,
                'description' => $this->description,
                'created_by' => Auth::user()->name,

            ]);
            $this->resetInputs();
            $this->emit('closeDownloadsEditModal');
           
        }
    }
    public function updateImage()
    {
        if($this->story_id)
        {

            $this->validate([
                'cover_image' => ['required','image']
            ]);
            $filename = $this->cover_image->store('jonastory','public');
            
            $updateStory = Story::find($this->story_id);
                $updateStory->update([
                    'cover_image' => $filename,
                ]);

            session()->flash('slider_image_updation', 'Cover Image updated successfully');
        }
    }
    public function deleteConfirmaton(Story $story)
    {
        $this->story_id = $story->id;
        $this->title = $story->title;
    }
    public function destroy()
    {
        Story::find($this->story_id)->delete();
        $this->emit('closeDownloadsDeleteModal');
        session()->flash('message', '😓 Story  & its related Data Moved to Trash');

    }

    public function viewFileModal(Story $story)
    {
        $this->story_id = $story->id;
        $this->title = $story->title;
        $this->description = $story->description;
        $this->cover_image = $story->cover_image;
    }
    public function render()
    {
        $showInArray = [
            'fetchStory' => Story::latest()->get(),
        ];
        return view('livewire.backend.home-page.jona-story.story-settings',
                compact('showInArray'))
                ->extends('layouts.backend');
    }
}
