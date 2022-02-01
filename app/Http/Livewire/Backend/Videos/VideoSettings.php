<?php

namespace App\Http\Livewire\Backend\Videos;

use App\Models\Backend\VideoSettings as BackendVideoSettings;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class VideoSettings extends Component
{
    public $video_title,$youtube_link,$description, $video_id;

    public function resetInputs()
    {
        $this->video_title=NULL;
        $this->youtube_link=NULL;
        $this->description=NULL;
    }
    public function validatInputs()
    {
        $this->validate([
            'video_title' => ['nullable'],
            'youtube_link' => ['required'],
            'description' => ['required'],
        ]);
    }
    public function store()
    {
        //call validation method
        $this->validatInputs();
        //save to table
        BackendVideoSettings::create([
            'video_title' => $this->video_title,
            'youtube_link' => $this->youtube_link,
            'description' => $this->description,
            'created_by' => Auth::user()->name

        ]);
        //reset all inputs fields after saving
        $this->resetInputs();
        $this->emit('closeVideoCreationModal');
        session()->flash('video_message','Video Added Successfully');
        
    }
    public function view($id)
    {   
        $findVideoById = BackendVideoSettings::where('id', $id)->first();
        $this->video_id = $findVideoById->id;
        $this->video_title = $findVideoById->video_title;
        $this->youtube_link = $findVideoById->youtube_link;
        $this->description = $findVideoById->description;
    }
    public function edit($id)
    {   
        $findVideoById = BackendVideoSettings::where('id', $id)->first();
        $this->video_id = $findVideoById->id;
        $this->video_title = $findVideoById->video_title;
        $this->youtube_link = $findVideoById->youtube_link;
        $this->description = $findVideoById->description;
    }
    public function update()
    {
        $this->validatInputs();
        if($this->video_id)
        {
            $updateVideo = BackendVideoSettings::find($this->video_id);
            $updateVideo->update([
                'video_title' => $this->video_title,
                'youtube_link' => $this->youtube_link,
                'description' => $this->description,
                'created_by' =>Auth::user()->name
            ]);
            $this->resetInputs();
            $this->emit('hideUpdateDonorModal');
            session()->flash('message','Records updated successfully.');

        }
    }

    public function showDeleteConfirmation(BackendVideoSettings $video)
    {
        $this->video_id = $video->id;
        $this->video_title = $video->video_title;
    }
    public function destroy()
    {
        if($this->video_id)
        {
            BackendVideoSettings::find($this->video_id)->delete();
            $this->emit('hideDeleteDonorModal');
            session()->flash('message','Donation Deleted Successfully.');
        }
    }
    public function render()
    {
        $showAll = [
            'showVideo' => BackendVideoSettings::latest()->get(),
        ];

        return view('livewire.backend.videos.video-settings',
                compact('showAll'))
                ->extends('layouts.backend');
    }
}
