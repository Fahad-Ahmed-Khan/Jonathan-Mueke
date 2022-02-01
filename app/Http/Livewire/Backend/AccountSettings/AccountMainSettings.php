<?php
namespace App\Http\Livewire\Backend\AccountSettings;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class AccountMainSettings extends Component
{
    use WithFileUploads;

    public $name,$cover_image,$email,$role,$phone_number,
            $password,$password_confirmation,$user_id, $current_password;

    public function resetInputs()
    {
        $this->name = NULL;
        $this->email= NULL;
        $this->email = NULL;
        $this->phone_number = NULL;
        $this->password = NULL;
        $this->role= NULL;
        $this->password_confirmation = NULL;
    }
    public function validateFields()
    {

        $this->validate([
            'name' => ['required'],
            'email' => ['required','email','unique:users'],
            'phone_number'  => ['required','starts_with:+254','unique:users'],
            'cover_image' => ['nullable','image','mimes:jpg,jpeg,png,gif','max:2048'],
            'password' => ['required','confirmed'],
        ]);
    }
    # Store data in database
    public function store()
    {
        if (isset($this->cover_image)) 
        {
            # if cover image is set...
            $this->validateFields();
            User::create([
                'name' => $this->name,
                'email' => $this->email,
                'phone_number' => $this->phone_number,
                'role' => $this->role,
                'cover_image' => $this->cover_image->store('userAccountProfile','public'),
                'password' => Hash::make( $this->password )
            ]);
            $this->resetInputs();
            $this->emit('closeUserCreateModal');
        } 
        else 
        {
            # cover image not set...
            $this->validateFields();
            User::create([
                'name' => $this->name,
                'email' => $this->email,
                'phone_number' => $this->phone_number,
                'role' => $this->role,
                'cover_image' => NULL,
                'password' => Hash::make( $this->password )
            ]);
           $passWord = $this->password;
            $this->resetInputs();
            $this->emit('closeUserCreateModal');
        } 
    }

    public function edit($id)
    {
        $findUserById = User::where('id', $id)->first();

        $this->user_id = $findUserById->id;
        $this->name = $findUserById->name;
        $this->email = $findUserById->email;
        $this->role = $findUserById->role;
        $this->cover_image = $findUserById->cover_image;
        $this->phone_number = $findUserById->phone_number;
    }   

    public function update()
    {
        // $this->validateFields();

        if($this->user_id)
        {
            $updateUser = User::find($this->user_id);
            $updateUser->update([
                'name' => $this->name,
                'email' => $this->email,
                'phone_number' => $this->phone_number,
                'role' => $this->role
            ]);
            $this->resetInputs();
            session()->flash('profile_updation','profile information updated.');
            $this->emit('closeUserEditModal');
        }
    }
    public function deleteUserConfirmaton(User $user)
    {
        $this->user_id = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
        
    }
    public function destroy()
    {
        User::find($this->user_id)->delete();
        $this->emit('closeUserDeleteModal');
    }

    // Update Password function

    public function updatePassword()
    {
        $this->validate([
            'current_password' => ['required'],
            'password' => ['required','confirmed'],
            'password_confirmation' => ['required','same:password']
        ]);
        $current_password = Auth::user()->password;

        if(Hash::check($this->current_password, $current_password))
        {
            $user_id = Auth::user()->id;
            if($this->user_id)
            {
                $updateUser = User::find($this->user_id);
                $updateUser->update([
                    'password' => Hash::make($this->password),
                    'email_verified_at' => NULL
                ]);   
            }
        }

    }
    // Image update
    public function imageDialog()
    {
        if(isset($this->cover_image))
        {
            $userId= Auth::user()->id;
            $updateUserImage = User::find($userId);
                $updateUserImage->update([
                    'cover_image' => $this->cover_image->store('userAccountProfile','public'),
                ]);   
        }
    }

    public function updateImage()
    {
        $filename = $this->cover_image->store('userAccountProfile','public');
        if(isset($this->cover_image))
        {
            $userId= Auth::user()->id;
            $updateUserImage = User::find($userId);
                $updateUserImage->update([
                    'cover_image' => $filename,
                ]);   
                session()->flash('image_updation', 'Profile picture updated');
                // $this->emit('closeUserImageUpdateModal');
        }  
    }

    public function render()
    {
        $dataList = [
            'listUsersAccount' => User::OrderBy('created_at','DESC')->get(),
            'countUsers' => User::count(),
        ];
        return view('livewire.backend.account-settings.main-settings',
            compact('dataList'))
            ->extends('layouts.backend');
    }
}
