<?php

namespace App\Http\Livewire\Frontend\Subscribe;

use App\Mail\WelcomeSubscriberNotification;
use App\Models\Backend\Subscription;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class SubscriptionSettings extends Component
{
    public $name, $email;
    
    public function resetInput()
    {
        $this->name= NULL;
        $this->email= NULL;
    }
    public function validateForm()
    {
        $this->validate([
            'name' => ['required'],
            'email' => ['required','unique:subscriptions','email']
        ],[
            'name.required' => '🙋 Let us know you by name as well..',
            'email.email' => 'follow correct email format,',
            'email.required' => '😇 We wont spam you pleeease,your email ✉️.',
            'email.unique' => 'Oops 🙆! Could you have registered previousely.Your email exist.'
        ]);
    }
    public function store()
    {
        $this->validateForm();
        Subscription::create([
            'name' => $this->name,
            'email' => $this->email
        ]);
        $name = $this->name;
        $email = $this->email;

        $message = "Dear $name ! Thank you for subscribing with Us, Please check your email:($email) for more information.";
        $this->resetInput();

        // Sent Welcome email to subscriber
        Mail::to($email)->send(new WelcomeSubscriberNotification());

        session()->flash('subscription_message',$message);
    }
    public function render()
    {
        return view('livewire.frontend.subscribe.subscription-settings')
                ->extends('layouts.frontend');
    }
}
