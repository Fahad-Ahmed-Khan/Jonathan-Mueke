<?php

namespace App\Http\Livewire\Backend\SocialMedia;

use App\Models\Backend\SocialMedia;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class SocialMediaMainSettings extends Component
{
    public $header,$description,$image,$learn,$socialMedia_id;
	use WithFileUploads;
	
    public function resetInput()
    {
        $this->header= NULL;
        $this->description = NULL;
        $this->image=NULL;
		$this->learn=NULL;
    }

    public function validateInputs()
    {
        $this->validate([
            'header' => ['required'],
            'description' => ['required'],
            'image' => ['mimes:jpg,jpeg,png'],
			'learn' => ['required'],
        ]);
    }
    public function store()
    {
        $this->validateInputs();
        SocialMedia::create( [
            'header' => $this->header,
            'description' => $this->description,
            'image' => $this->image->store('socialMedia','public'),
			'learn' => $this->learn,
            'created_by' => Auth::user()->name,
        ]);

        $this->resetInput();
        $this->emit('closeSocialMediaCreateModal');
        //message here
    }

    public function edit($id)
    {
        $findSocial = SocialMedia::where('id', $id)->first();
        $this->socialMedia_id = $findSocial->id;
        $this->header = $findSocial->header;
        $this->description = $findSocial->description;
        $this->image = $findSocial->image;
		$this->learn = $findSocial->learn;
    }
    public function update()
    {
        if($this->socialMedia_id)
        {
            $update = SocialMedia::find( $this->socialMedia_id );
            $update->update([
                'header' => $this->header,
                'description' => $this->description,
                'image' => $this->image,
				'learn' => $this->learn,
                'created_by' => Auth::user()->name,
            ]);
            $this->resetInput();
            $this->emit('closeSocialMediaEditModal');
        }

    }

    public function destroyModalForm(SocialMedia $social)
    {
        $this->user_id = $social->id;
        $this->header = $social->header;
    }
    public function destroy()
    {
        SocialMedia::find($this->socialMedia_id)->delete();
        $this->emit('closeSocialMediaDeleteModal');
    }
    
    public function render()
    {
        $showSocialMedia = SocialMedia::OrderBy('created_at')->get();
        return view('livewire.backend.social-media.main-settings',
            compact('showSocialMedia'))
            ->extends('layouts.backend');
    }
}
