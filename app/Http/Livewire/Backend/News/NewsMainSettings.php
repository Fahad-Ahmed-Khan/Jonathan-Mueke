<?php

namespace App\Http\Livewire\Backend\News;

use App\Models\Backend\News;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class NewsMainSettings extends Component
{
    use WithFileUploads;
    public $news_title, $cover_image, $description,$news_id;
    
    public function resetInput()
    {
        $this->news_title= NULL;
        $this->description = NULL;
        $this->cover_image=NULL;
    }

    public function validateInputs()
    {
        $this->validate([
            'news_title' => ['required'],
            'description' => ['required'],
            'cover_image' => ['required','image','mimes:jpg,jpeg,png']
        ]);
    }
    public function store()
    {
        $this->validateInputs();
        News::create( [
            'news_title' => $this->news_title,
            'description' => $this->description,
            'cover_image' => $this->cover_image->store('news','public'),
            'created_by' => Auth::user()->name,
        ]);

        $this->resetInput();
        $this->emit('closeNewsCreateModal');
        //message here
    }

    public function edit($id)
    {
        $findNews = News::where('id', $id)->first();
        $this->news_id = $findNews->id;
        $this->news_title = $findNews->news_title;
        $this->description = $findNews->description;
        $this->cover_image = $findNews->cover_image;
    }
    public function update()
    {
        if($this->news_id)
        {
            $update = News::find( $this->news_id );
            $fileToUpdate = $this->cover_image ?? null;
                # code...
                $update->update([
                    'news_title' => $this->news_title,
                    'description' => $this->description,
                    'created_by' => Auth::user()->name,
                    'cover_image' => $this->cover_image ? $this->cover_image->store('news','public') : $fileToUpdate,
                ]);
          
            $this->resetInput();
            $this->emit('closeNewsEditModal');
        }

    }

    public function destroyModalForm(News $news)
    {
        $this->news_id = $news->id;
        $this->news_title = $news->news_title;
    }
    public function destroy()
    {
        News::find($this->news_id)->delete();
        $this->emit('closeNewsDeleteModal');
    }



    public function render()
    {
        $showNews = News::OrderBy('created_by','DESC')->get();

        return view('livewire.backend.news.main-settings',
        compact('showNews'))
        ->extends('layouts.backend');
    }
}
