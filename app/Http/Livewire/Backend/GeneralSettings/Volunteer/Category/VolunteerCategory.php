<?php

namespace App\Http\Livewire\Backend\GeneralSettings\Volunteer\Category;

use App\Models\Backend\VolunteerCategory as BackendVolunteerCategory;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class VolunteerCategory extends Component
{
    public $category_name;
    public $category_id;

    public function resetInputs()
    {
        $this->category_name=NULL;
    }

    public function store()
    {
        $this->validate([
            'category_name' => ['required','unique:volunteer_categories'],
        ]);
        BackendVolunteerCategory::create([
            'category_name' => $this->category_name,
            'created_by' =>Auth::user()->name
        ]);
        $fetchCategoryName = $this->category_name;
        $this->resetInputs();
        session()->flash('category_added_message',"$fetchCategoryName  Added successfuly 👍");
        $this->emit('categoryCreate');

    }
    public function edit($id)
    {
        $findCategoryId = BackendVolunteerCategory::where('id', $id)->first();
        $this->category_id = $findCategoryId->id;
        $this->category_name = $findCategoryId->category_name;
    }

    public function update()
    {
        $this->validate([
            'category_name' => ['required'],
        ]);
        if($this->category_id)
        {
            $updateCategory = BackendVolunteerCategory::find($this->category_id);
            $updateCategory->update([
                'category_name' => $this->category_name,
                'created_by' =>Auth::user()->name
            ]);
            $this->resetInputs();
            $this->emit('categoryUpdate');
        }
    }
    public function showDeleteConfirmation(BackendVolunteerCategory $category)
    {
        $this->category_id = $category->id;
        $this->category_name = $category->category_name;
    }

    public function destroy()
    {
        if($this->category_id)
        {
            BackendVolunteerCategory::find($this->category_id) ->delete();
            $categoryName = $this->category_name;
            $this->emit('hideDeleteModal');
            session()->flash('category-delete-message',"$categoryName  Deleted successfuly");
        }
    }
    public function render()
    {
        $showVolunteerCategory = [
            'volunteerCategory' => BackendVolunteerCategory::withCount(['volunteers'])->get(),
            'countVolunteer' => BackendVolunteerCategory::count(),
        ];
        return view('livewire.backend.general-settings.volunteer.category.volunteer-category',
                compact('showVolunteerCategory'))
                ->extends('layouts.backend');
    }
}
