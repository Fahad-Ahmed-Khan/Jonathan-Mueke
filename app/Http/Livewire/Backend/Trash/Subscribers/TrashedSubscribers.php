<?php

namespace App\Http\Livewire\Backend\Trash\Subscribers;

use App\Models\Backend\Subscription;
use Livewire\Component;

class TrashedSubscribers extends Component
{
    public $name,$subscriber_id;

    public function showRestoreConfirmation($id)
    {
        $findSubscriberById = Subscription::onlyTrashed()
                    ->where('id', $id)->first();

            $this->subscriber_id = $findSubscriberById->id;
            $this->name = $findSubscriberById->name;
            // dd($this->name);
        
    }

    public function restore(){
        
        if($this->subscriber_id)
        {
            Subscription::where('id',$this->subscriber_id)
                            ->restore();
            
        }

            
    }
    public function showDeleteConfirmation($id)
    {
        $findDeletedSubscriberById = Subscription::onlyTrashed()
                    ->where('id', $id)->first();

        $this->subscriber_id = $findDeletedSubscriberById->id;
        $this->name = $findDeletedSubscriberById->name;
    }

    public function destroyPermanent()
    {
        if($this->subscriber_id)
        {
            Subscription::where('id',$this->subscriber_id)
                            ->forceDelete();
                            
            $name = $this->name;
            $message ='Oops! You have permanently deleted [ '.$name.'\'s ] subscription information' ;
            $this->emit('hideDeleteSubscriptionModal');
            session()->flash('subscriber_deletion',$message);
            
        }
       
    }
    public function render()
    {
        $showTrashed = [
            'subscribers' => Subscription::onlyTrashed()->get()
        ];
        return view('livewire.backend.trash.subscribers.trashed-subscribers', compact('showTrashed'))
                ->extends('layouts.backend');
    }
}
