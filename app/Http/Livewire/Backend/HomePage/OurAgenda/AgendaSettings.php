<?php

namespace App\Http\Livewire\Backend\HomePage\OurAgenda;

use App\Models\Backend\Agenda;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class AgendaSettings extends Component
{
    use WithFileUploads;
    public $agenda_title,$cover_image,$description, $agenda_id;
   
    public function resetInputs()
    {	
		
        $this->agenda_title = NULL;
        $this->cover_image= NULL;
        $this->description = NULL;
    }
    public function validateFields()
    {

        $this->validate([
			
            'agenda_title' => ['required'],
            'description'  => ['required'],
            'cover_image' => ['required','image','mimes:jpg,png,jpeg'],
        ]);
    }

    public function store()
    {
        $this->validateFields();
        Agenda::create([
			
            'agenda_title' => $this->agenda_title,
            'description' => $this->description,
            'cover_image' => $this->cover_image->store('agenda','public'),
            'created_by' => Auth::user()->name,
        ]);
        $this->resetInputs();
        $this->emit('closeDownloadsCreateModal');
        session()->flash('message', 'Agenda information added successfuly');
    }

    public function edit($id)
    {
        $findAgendaById = Agenda::where('id', $id)->first();

        $this->agenda_id = $findAgendaById->id;
		
        $this->agenda_title = $findAgendaById->agenda_title;
        $this->description = $findAgendaById->description;
        $this->cover_image = $findAgendaById->cover_image;
    }   

    public function update()
    {
        // $this->validateFields();
        if($this->agenda_id)
        {
           
                $updateAgenda = Agenda::find($this->agenda_id);
                $updateAgenda->update([
				
                'agenda_title' => $this->agenda_title,
                'description' => $this->description,
                // 'cover_image' => $this->cover_image->store('agenda','public'),
                'created_by' => Auth::user()->name,

            ]);
            $this->resetInputs();
            $this->emit('closeDownloadsEditModal');
          
        }
    }
    
    public function deleteConfirmaton(Agenda $agenda)
    {
        $this->agenda_id = $agenda->id;
        $this->agenda_title = $agenda->agenda_title;
    }
    public function destroy()
    {
        Agenda::find($this->agenda_id)->delete();
        $this->emit('closeDownloadsDeleteModal');
        session()->flash('message', '😓 Slider and its related Data Moved to Trash');

    }

    public function viewFileModal(Agenda $agenda)
    {
        $this->agenda_id = $agenda->id;
		
        $this->agenda_title = $agenda->agenda_title;
        $this->description = $agenda->description;
        $this->cover_image = $agenda->cover_image;
    }
    public function updateImage()
    {
        if($this->agenda_id)
        {

            $this->validate([
                'cover_image' => ['required','image']
            ]);
            $filename = $this->cover_image->store('agenda','public');
            
            $updateAgenda = Agenda::find($this->agenda_id);
                $updateAgenda->update([
                    'cover_image' => $filename,
                ]);

            session()->flash('agenda_image_updation', 'Image updated successfully');
        }
    }
    public function render()
    {
        $showInArray = [
            'fetchAgenda' => Agenda::latest()->get(),
        ];
        return view('livewire.backend.home-page.our-agenda.agenda-settings',
                    compact('showInArray'))
                ->extends('layouts.backend');
    }
}
