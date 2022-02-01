<?php

namespace App\Http\Livewire\Backend\GeneralSettings\Donate;

use App\Exports\DonationExport;
use App\Models\Backend\DonorSetting;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use PDF;
use Dompdf\Options;
use Maatwebsite\Excel\Facades\Excel;

class DonateSettings extends Component
{
    public $name,$email,$phone,$amount, $donor_id;

    public function resetInputs()
    {
		
        $this->name=NULL;
        $this->email=NULL;
        $this->phone=NULL;
        $this->amount=NULL;
    }
    public function validatInputs()
    {
        $this->validate([
			
            'name' => ['required'],
            'phone' => ['required','starts_with:07','min:10','max:10'],
            'email' => ['required','email'],
            'amount' => ['required','numeric']
        ]);
    }
    public function store()
    {
        //call validation method
        $this->validatInputs();
        //save to table
        DonorSetting::create([
			
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email,
            'amount' => $this->amount,
            'created_by' => Auth::user()->name

        ]);
        //reset all inputs fields after saving
        $this->resetInputs();
        $this->emit('closeDonorCreationModal');
        session()->flash('message','Donation sent.Please wait for MPESA Confirmation');
        
    }
    public function edit($id)
    {   
        $findDonorById = DonorSetting::where('id', $id)->first();
        $this->donor_id = $findDonorById->id;
		
        $this->name = $findDonorById->name;
        $this->email = $findDonorById->email;
        $this->phone = $findDonorById->phone;
        $this->amount =$findDonorById->amount;
    }
    public function update()
    {
        $this->validatInputs();
        if($this->donor_id)
        {
            $updateDonor = DonorSetting::find($this->donor_id);
            $updateDonor->update([
				
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
                'amount' => $this->amount,
                'created_by' =>Auth::user()->name
            ]);
            $this->resetInputs();
            $this->emit('hideUpdateDonorModal');
            session()->flash('message','Records updated successfully.');

        }
    }

    public function showDeleteConfirmation(DonorSetting $donor)
    {
        $this->donor_id = $donor->id;
        $this->name = $donor->name;
    }
    public function destroy()
    {
        if($this->donor_id)
        {
            DonorSetting::find($this->donor_id)->delete();
            $this->emit('hideDeleteDonorModal');
            session()->flash('delete_donor_message','Donor details moved to trash...');
        }

    }
    public function donationExport()
    {
        return Excel::download(new DonationExport, 'donations.xlsx');
    }

    public function exportPDF()
    {

        $showAll = [
            'downloadDonors' => DonorSetting::all(),
            'sumDonatedAmount' => DonorSetting::sum('amount')
        ];
        $options = new Options();
        $options->setIsRemoteEnabled(true);
        $options->setIsHtml5ParserEnabled(true);
        PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        $options =PDF::loadView('livewire.backend.general-settings.donate.download-pdf', compact('showAll'))
                ->setPaper('a4', 'portrait')
                ->setWarnings(false)
                ->output();

        // return $options->download('applicants.pdf');
        return response()->streamDownload(
            fn () => print($options),
            "donors_contributions.pdf"
       );
    }
    public function render()
    {
        $showAll = [
            'showDonors' => DonorSetting::latest()->get(),
            'sumDonatedAmount' => DonorSetting::sum('amount'),
            'countDonors' => DonorSetting::count()
        ];

        return view('livewire.backend.general-settings.donate.donate-settings'
            , compact('showAll'))
            ->extends('layouts.backend');
    }
}
