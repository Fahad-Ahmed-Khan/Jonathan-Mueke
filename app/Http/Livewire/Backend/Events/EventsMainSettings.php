<?php

namespace App\Http\Livewire\Backend\Events;

use App\Models\Backend\Events;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class EventsMainSettings extends Component
{
    use WithFileUploads;
    public $event_title,$cover_image,$venue,$date_from,$date_to, $description,$event_id;
   
    public function resetInputs()
    {
        $this->event_title = NULL;
        $this->cover_image= NULL;
        $this->venue = NULL;
        $this->date_from = NULL;
        $this->data_to = NULL;
        $this->description = NULL;
    }
    public function validateFields()
    {

        $this->validate([
            'event_title' => ['required'],
            'venue' => ['required'],
            'date_from' => ['required'],
            'date_to' => ['required'],
            'description'  => ['required'],
            'cover_image' => ['required','image','mimes:jpg,png,jpeg'],
        ]);
    }

    public function store()
    {
        $this->validateFields();
        Events::create([
            'event_title' => $this->event_title,
            'venue' => $this->venue,
            'date_from' =>  $this->date_from,
            'date_to' => $this->date_to,
            'description' => $this->description,
            'cover_image' => $this->cover_image->store('events','public'),
            'created_by' => Auth::user()->name,
        ]);
        $this->resetInputs();
        $this->emit('closeDownloadsCreateModal');
        session()->flash('event_message', 'Event information added successfuly');
    }

    public function edit($id)
    {
        $findEventById = Events::where('id', $id)->first();
        $this->event_id = $findEventById->id;
        $this->event_title = $findEventById->event_title;
        $this->venue = $findEventById->venue;
        $this->date_from = $findEventById->date_from;
        $this->date_to = $findEventById->date_to;
        $this->description = $findEventById->description;
    }   

    public function update()
    {
        // $this->validateFields();
        if($this->event_id)
        {
            $updateEvent = Events::find($this->event_id);
            $updateEvent->update([
                'event_title' => $this->event_title,
                'venue' => $this->venue,
                'date_from' =>  $this->date_from,
                'date_to' => $this->date_to,
                'description' => $this->description,
                'created_by' => Auth::user()->name,
            ]);
            $this->resetInputs();
            $this->emit('closeDownloadsEditModal');
        }
    }
    public function viewImageModal(Events $event)
    {
        $this->story_id = $event->id;
        $this->event_title = $event->event_title;
        $this->description = $event->description;
        $this->cover_image = $event->cover_image;
    }
    
    public function deleteConfirmation(Events $event)
    {
        $this->event_id = $event->id;
        $this->event_title = $event->event_title;
    }
    public function destroy()
    {
        Events::find($this->event_id)->delete();
        $this->emit('closeDownloadsDeleteModal');
        session()->flash('event_message', '😓 Event and its related Data Moved to Trash');

    }

    public function viewEventImageModal(Events $event)
    {
        $this->event_id = $event->id;
        $this->event_title = $event->event_title;
        $this->cover_image = $event->cover_image;
        $this->description = $event->description;
    }
    public function updateEventImage()
    {
        if($this->event_id)
        {
            $this->validate([
                'cover_image' => ['required','image']
            ]);
            $filename = $this->cover_image->store('events','public');
            
            $updatEventCoverImage = Events::find($this->event_id);
                $updatEventCoverImage->update([
                    'cover_image' => $filename,
                ]);

            session()->flash('event_image_updation', 'Cover image updated successfully');
        }
    }
    public function render()
    {
        $showArrayOfEvent = [
            'events' => Events::latest()->get(),
            'count-events' => Events::count()
        ];
        return view('livewire.backend.events.main-settings', 
                compact('showArrayOfEvent'))
                ->extends('layouts.backend');
    }
}
