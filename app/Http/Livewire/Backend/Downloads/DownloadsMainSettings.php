<?php

namespace App\Http\Livewire\Backend\Downloads;

use App\Models\Backend\Downloads;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class DownloadsMainSettings extends Component
{
    use WithFileUploads;
    public $document_title,$document_file,$description, $document_id;
   
    public function resetInputs()
    {
        $this->document_title = NULL;
        $this->document_file= NULL;
        $this->description = NULL;
    }
    public function validateFields()
    {

        $this->validate([
            'document_title' => ['required'],
            'description'  => ['required'],
            'document_file' => ['nullable','file','mimes:pdf'],
        ]);
    }

    public function store()
    {
        $this->validateFields();
        Downloads::create([
            'document_title' => $this->document_title,
            'description' => $this->description,
            'document_file' => $this->document_file->store('downloads','public'),
            'created_by' => Auth::user()->name,
        ]);
        $this->resetInputs();
        $this->emit('closeDownloadsCreateModal');
        session()->flash('message', 'File uploaded successfuly');
    }

    public function edit($id)
    {
        $findDocumentById = Downloads::where('id', $id)->first();

        $this->document_id = $findDocumentById->id;
        $this->document_title = $findDocumentById->document_title;
        $this->description = $findDocumentById->description;
        $this->document_file = $findDocumentById->document_file;
    }   


    public function update()
    {
        // $this->validateFields();

        if(isset($this->document_file))
        {
             if($this->document_id)
            {
                $updateDoc = Downloads::find($this->document_id);
                $updateDoc->update([
                    'document_title' => $this->document_title,
                    'description' => $this->description,
                    // 'document_file' => $this->document_file->store('downloads','public'),
                    'created_by' => Auth::user()->name,

                ]);
                $this->resetInputs();
                $this->emit('closeDownloadsEditModal');
            }
        }
           
        }
        public function deleteConfirmaton(Downloads $download)
        {
            $this->document_id = $download->id;
            $this->document_title = $download->document_title;
        }
        public function destroy()
        {
            Downloads::find($this->document_id)->delete();
            $this->emit('closeDownloadsDeleteModal');
            session()->flash('message', '😓 File and its related Data Moved to Trash');

    }

    public function viewFileModal(Downloads $download)
    {
        $this->document_id = $download->id;
        $this->document_title = $download->document_title;
        $this->document_file = $download->document_file;
    }

    public function render()
    {
        $showDownloads = Downloads::latest()->get();
        return view('livewire.backend.downloads.main-settings', compact('showDownloads'))
                ->extends('layouts.backend');
    }

}
