<?php

namespace App\Http\Livewire\Backend\AboutUs;

use App\Models\Backend\AboutUs;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class AboutUsMainSettings extends Component
{
    public $title,$description,$image,$button,$aboutUs_id;
    use WithFileUploads;

    public function resetInput()
    {
		
        $this->title= NULL;
        $this->description = NULL;
        $this->image=NULL;
		$this->button=NULL;
    }

    public function validateInputs()
    {
        $this->validate([
			
            'title' => ['required'],
            'description' => ['required'],
            'image' => ['mimes:jpg,jpeg,png'],
			'button'=> ['required'],
        ]);
    }
    public function store()
    {
        $this->validateInputs();
        AboutUs::create( [
			
            'title' => $this->title,
            'description' => $this->description,
            'image' => $this->image->store('aboutUs','public'),
			'button' => $this->button,
            'created_by' => Auth::user()->name,
        ]);

        $this->resetInput();
        $this->emit('closeAboutUsCreateModal');
        //message here
    }

    public function edit($id)
    {
        $findAboutUs = AboutUs::where('id', $id)->first();
        $this->aboutUs_id = $findAboutUs->id;
        $this->title = $findAboutUs->title;
        $this->description = $findAboutUs->description;
        $this->image = $findAboutUs->image;
		$this->button = $findAboutUs->button;
    }
    
    public function update()
    {
        if($this->aboutUs_id)
        {
            $update = AboutUs::find( $this->aboutUs_id );
            $update->update([
                'title' => $this->title,
                'description' => $this->description,
                'image' => $this->image ? $this->image->store('aboutUs','public') : $this->image,
				'button' => $this->button,
                'created_by' => Auth::user()->name,
            ]);
            $this->resetInput();
            $this->emit('closeAboutUsEditModal');
        }

    }

    public function destroyModalForm(AboutUs $aboutUs)
    {
        $this->user_id = $aboutUs->id;
        $this->title = $aboutUs->title;
    }
    public function destroy()
    {
        AboutUs::find($this->aboutUs_id)->delete();
        $this->emit('closeAboutUsDeleteModal');
    }

    public function render()
    {
        $showAboutUs = AboutUs::limit(4)->get();
        return view('livewire.backend.about-us.main-settings',
                    compact('showAboutUs'))
                ->extends('layouts.backend');
    }
}
