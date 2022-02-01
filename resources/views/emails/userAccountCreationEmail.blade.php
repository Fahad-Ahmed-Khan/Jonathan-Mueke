@component('mail::message')
# {{ config('app.name') }}

   <center>
        <img src="https://pbs.twimg.com/profile_banners/63803710/1614934404/1500x500"
        width="100%" height="auto"
        alt="photo">
   </center>
    
Hi {{$user->name}}, 

<small style="text-align: justify">
   
    A new account has been created for you at {{ config('app.name') }} and you have been issued with a new temporary password.
    '{{$user->email}}' 
   
    Your current login information is now: 
    
    Username: {{$user->name}} 
    Email: {{$user->email}}
    Password: 
    
    (you will have to re-set your password by clicking the below button)
    
    To confirm this request, and set a new password for your account, please
    go to the following web address: 


    In most mail programs, this should appear as a blue link which you can just click on.  If that doesn't work,
    then cut and paste the address into the address line at the top of your web browser window.

@component('mail::button', ['url' => 'http://localhost:8000/password/reset', 'color' => 'success'])
Reset password
@endcomponent
<small>
    (This link is valid for 1hr from the time this reset was first
    requested)
    
    If this password reset was not requested by you, no action is needed.
    
    If you need help, please contact the site administrator,
</small>
<small class="text-muted">You are receiving this email because, the sender had access to your address, If this is not you,no further action is required. {{$user->email}}</small>

Cheers from the ' {{ config('app.name') }}'! <br>
<small>
    administrator, <br>
</small>

    @slot('footer')
        @component('mail::footer')
        © {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')
        @endcomponent
    @endslot
@endcomponent
