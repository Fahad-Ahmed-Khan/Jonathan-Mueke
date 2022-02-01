<?php

namespace App\Http\Livewire\Backend\GeneralSettings\Engage;

use App\Mail\RequestForShoutOutEmail;
use App\Models\Backend\RequestForGreeting;
use Carbon\Carbon;
use PDF;
use Dompdf\Options;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class EngageSettings extends Component
{
    public $shoutout_title,$name,$email,$phone,$description;
    public $request_id, $selectAllRequest,$select;

    public function resetInputs()
    {
        $this->name=NULL;
        $this->email=NULL;
        $this->phone=NULL;
        $this->shoutout_title = NULL;
        $this->description=NULL;
        $this->select = NULL;
    }
    public function validatInputs()
    {
        $this->validate([
            'name' => ['required'],
            'phone' => ['nullable','starts_with:+2547','min:13','max:13'],
            'email' => ['required','email'],
            'description' => ['required','string'],
            'shoutout_title' => ['required']
        ]);
    }
    public function store()
    {
        //call validation method
        $this->validatInputs();
        //save to table
        RequestForGreeting::create([
            'name' => $this->name,
            'shoutout_title' =>  $this->shoutout_title,
            'phone' => $this->phone,
            'email' => $this->email,
            'description' => $this->description,
            'created_by' => Auth::user()->name

        ]);
        $email = $this->email;
        //reset all inputs fields after saving
        $this->resetInputs();
        $this->emit('closeDonorCreationModal');
          
        Mail::to($email)->send(new RequestForShoutOutEmail());

        session()->flash('message','Request Shared to the team, Please check your email.');
        
    }
    public function edit( $id)
    {   
        $findRequestById = RequestForGreeting::where('id', $id)->first();
        $this->request_id = $findRequestById->id;
        $this->shoutout_title = $findRequestById->shoutout_title;
        $this->name = $findRequestById->name;
        $this->email = $findRequestById->email;
        $this->phone = $findRequestById->phone;
        $this->description = $findRequestById->description;

    }
    public function update()
    {
        $this->validatInputs();
        if($this->request_id)
        {
            $updateRequest = RequestForGreeting::find($this->request_id);
            $updateRequest->update([
                'name' => $this->name,
                'shoutout_title' =>  $this->shoutout_title,
                'phone' => $this->phone,
                'email' => $this->email,
                'description' => $this->description,
                'created_by' => Auth::user()->name
            ]);
            $this->resetInputs();
            $this->emit('hideUpdateShoutOutModal');
            session()->flash('request_message','Request updated successfully.');

        }
    }

    public function showDeleteConfirmation(RequestForGreeting $request)
    {
        $this->request_id = $request->id;
        $this->name = $request->name;
    }
    public function destroy()
    {
        if($this->request_id)
        {
            RequestForGreeting::find($this->request_id)->delete();
            $this->emit('hideDeleteShoutOutModal');
            session()->flash('request_message','Data Moved to trash.');
        }

    }

    public function exportPDF()
    {
        $showAll = [
            'downloadApplicants' => RequestForGreeting::all(),
            'currentDate' => Carbon::now()
        ];
        $options = new Options();
        $options->setIsRemoteEnabled(true);
        $options->setIsHtml5ParserEnabled(true);
        PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        $options =PDF::loadView('livewire.backend.general-settings.engage.download-pdf', compact('showAll'))
                ->setPaper('a4', 'portrait')
                ->setWarnings(false)
                ->output();

        // return $options->download('applicants.pdf');
        return response()->streamDownload(
            fn () => print($options),
            "applicants_.pdf"
       );
    }
    public function render()
    {
        $showAll = [
            'showRequests' => RequestForGreeting::latest()->get(),
            'countRequest' => RequestForGreeting::count()
        ];
        return view('livewire.backend.general-settings.engage.engage-settings',
                    compact('showAll'))
                ->extends('layouts.backend');
    }
}
