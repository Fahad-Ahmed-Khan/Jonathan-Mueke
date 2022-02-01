<?php

namespace App\Http\Livewire\Frontend\ModalForms;

use App\Mail\RequestForShoutOutEmail;
use App\Models\Backend\RequestForGreeting;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Engage extends Component
{
    public $shoutout_title,$name,$email,$description, $phone;

    public function resetInputs()
    {
        $this->shoutout_title = NULL;
        $this->name = NULL;
        $this->email= NULL;
        $this->description = NULL;
    }

    public function validateInput()
    {
        $this->validate([
            'shoutout_title' => ['required'],
            'name' => ['required'],
            'email' => ['required'],
            'description' => ['required'],
            'phone' => ['required']
        ]);
    }

    public function store()
    {
        $this->validateInput();
        RequestForGreeting::create([
            'name' => $this->name,
            'shoutout_title' => $this->shoutout_title,
            'phone' => $this->phone,
            'email' => $this->email,
            'description' => $this->description
        ]);
        $email = $this->email;
        $name = $this->name;
        $message = 'Dear '.$name.' 
                    Your request has been received, you will 
                    be contacted once reviewed.
                    Please check your email.';
        //reset all inputs fields after saving
        $this->resetInputs();
        
        Mail::to($email)->send(new RequestForShoutOutEmail());
        session()->flash('sender_request', $message);

        
    }


    public function render()
    {
        return view('livewire.frontend.modal-forms.engage')
                ->extends('layouts.frontend');
    }
}
