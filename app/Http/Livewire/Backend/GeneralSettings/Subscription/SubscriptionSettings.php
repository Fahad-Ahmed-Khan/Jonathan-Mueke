<?php

namespace App\Http\Livewire\Backend\GeneralSettings\Subscription;

use App\Exports\SubscribersExport;
use App\Models\Backend\Subscription;
use Carbon\Carbon;
use Livewire\Component;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use Dompdf\Options;

class SubscriptionSettings extends Component
{
    public $name,$email, $subscriber_id, $message, $subject;

    public function validateInputs()
    {
        $this->validate([
            'name' => ['required'],
            'email' => ['required', 'email']
        ],[
            'name.required' => '🙋 Let us know you by name'
        ]);
    }
    public function resetInputs() 
    {
        $this->name = NULL;
        $this->email = NULL;
    }
    public function edit( $id)
    {   
        $findSubscriber = Subscription::where('id', $id)->first();
        $this->subscriber_id = $findSubscriber->id;
        $this->name = $findSubscriber->name;
        $this->email = $findSubscriber->email;
    }
    public function update()
    {
        $this->validateInputs();
        if($this->subscriber_id)
        {
            $updateSubscriber = Subscription::find($this->subscriber_id);
            $updateSubscriber->update([
                'name' => $this->name,
                'email' => $this->email,
               
            ]);
            $this->resetInputs();
            $this->emit('hideUpdateDonorModal');
            session()->flash('subscriber_updation','Subscriber updated successfully.');

        }
    }

    public function showDeleteConfirmation(Subscription $subscriber)
    {
        $this->subscriber_id = $subscriber->id;
        $this->name = $subscriber->name;
    }

    public function showMessageDialog(Subscription $subscriber)
    {
        $this->subscriber_id = $subscriber->id;
        $this->name = $subscriber->name;
        $this->email = $subscriber->email;
    }
    public function destroy()
    {
        if($this->subscriber_id)
        {
            Subscription::find($this->subscriber_id)->delete();
            $name = $this->name;
            $message ='Oops! You have archived [ '.$name.'\'s ] subscription information.';
            $this->emit('hideDeleteSubscriptionModal');
            session()->flash('subscriber_deletion',$message);
        }

    }
    public function subscriptionExport()
    {
        return Excel::download(new SubscribersExport,'subscribers.xlsx');

    }

    public function exportPDF()
    {
        $showAll = [
            'downloadSubscribers' => Subscription::all(),
            'currentDate' => Carbon::now()
        ];
        $options = new Options();
        $options->setIsRemoteEnabled(true);
        $options->setIsHtml5ParserEnabled(true);
        PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        $options =PDF::loadView('livewire.backend.general-settings.subscription.download-pdf', compact('showAll'))
                ->setPaper('a4', 'portrait')
                ->setWarnings(false)
                ->output();

        // return $options->download('applicants.pdf');
        return response()->streamDownload(
            fn () => print($options),
            "subscribers.pdf"
       );
    }
    public function render()
    {
        $showAll = [
            'subscribers' => Subscription::latest()->get()
        ];
        return view('livewire.backend.general-settings.subscription.subscription-settings',
                    compact('showAll'))
                    ->extends('layouts.backend');
    }
}
