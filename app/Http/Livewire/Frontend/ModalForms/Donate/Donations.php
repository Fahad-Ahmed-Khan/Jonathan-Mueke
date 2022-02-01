<?php

namespace App\Http\Livewire\Frontend\ModalForms\Donate;

use App\Exports\DonationExport;
use App\Mail\PaymentConfirmationEmail;
use Livewire\Component;
use App\Models\Backend\DonorSetting;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;

class Donations extends Component
{
    public $name, $phone, $email, $amount;

    public function resetFields()
    {
        $this->name = NULL;
        $this->phone = NULL;
        $this->email = NULL;
        $this->amount= NULL;
    }
    public function validateInput()
    {
        $this->validate([
            'name' => ['required'],
            'email' => ['required','email'],
            'phone' => ['required','starts_with:07','max:10'],
            'amount' => ['required','numeric']
        ]);
    }
    public function store()
    {
        $this->validateInput();
        DonorSetting::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'amount' => $this->amount
        ]);
        $name = $this->name;
        $amount = $this->amount;
        $email = $this->email;
        $message = 'Dear '.$name.' your donation of (Ksh. '.$amount.') has been received.Please wait for MPESA Confirmation to complete payment.';
        
        $this->resetFields();
        // send email confirmation
        Mail::to($email)->send(new PaymentConfirmationEmail());
        session()->flash('donation_message', $message);
        
    }
    public function render()
    {
        return view('livewire.frontend.modal-forms.donate.donations');
    }
}
