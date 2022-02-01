<?php

namespace App\Http\Livewire\Frontend\ModalForms\Subscribe;

use App\Mail\WelcomeSubscriberNotification;
use App\Models\Backend\Subscription as BackendSubscription;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Subscription extends Component
{
    public $name, $email;

    public function resetInputs()
    {
        $this->name= NULL;
        $this->email=NULL;
    }

    public function validateInputs()
    {
        $this->validate([
            'name' => ['required'],
            'email' => ['required', 'email','unique:subscriptions']
        ]);
    }
    public function store()
    {
        $this->validateInputs();
        BackendSubscription::create([
            'name' => $this->name,
            'email' => $this->email
        ]);
        $name = $this->name;
        $email = $this->email;

        // Sent Welcome email to subscriber
        Mail::to($email)->send(new WelcomeSubscriberNotification());

        $message = 'Dear, '.$name.' Thank you for subscribing to Our updates. Please check your email.';
        session()->flash('subscription_message', $message);
    }
    public function render()
    {
        return view('livewire.frontend.modal-forms.subscribe.subscription');
    }
}
