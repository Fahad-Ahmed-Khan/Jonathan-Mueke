<?php

namespace App\Http\Livewire\Backend\AccountSettings;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class UpdatePassword extends Component
{

    public $current_password, 
            $password,$password_confirmation;

    public function updatePassword()
    {
        try {
            //code...
            $this->validate([
                'current_password' => ['required'],
                'password' => ['required','confirmed'],
                'password_confirmation' => ['required','same:password']
            ],[
                'current_password.required' => '😎 Please enter the current password 😜',
                'password.required' => '🥳 Now enter own password you"ll remember.',
                'password_confirmation.required' => '😓! Also to be filled.',
                'password_confirmation.same' => '👀 Ooh, No 😓! Your password MUST match.',
            ]);
            $current_password = Auth::user()->password;
    
            if(Hash::check($this->current_password, $current_password))
            {
                $user_id = Auth::user()->id;
                if($user_id)
                {
                    $updateUser = User::find($user_id);
                    $updateUser->update([
                        'password' => Hash::make($this->password),
                        'email_verified_at' => NULL
                    ]);   
                }
            }
        } catch (\Throwable $th) {
            throw $th;
        }

    }
    public function render()
    {
        return view('livewire.backend.account-settings.update-password');
    }
}
