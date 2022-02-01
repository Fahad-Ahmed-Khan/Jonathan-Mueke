@extends('layouts.auth.main')

@section('auth-content')
{{-- -=======================================================----- --}}
<div id="wrapper" class="container">
    <div class="height-100v d-flex align-items-center justify-content-center">
       <div class="card border-primary border-top-sm border-bottom-sm card-authentication1 mx-auto my-5">
           <div class="card-body">
            <div class="card-content p-2">
             <div class="card-title text-uppercase text-center pb-2">JMUEKE| ADMIN CONFIG</div>
               <p class="text-center small pb-2">
                Welcome <strong>{{Auth::user()->name}}</strong><br><small>One last step to get started!</small>
               </p>
               <span>(Verify your email address)</span>
               <center>
                <img src="{{asset('backend/assets/images/shots/email.gif')}}" class="rounded" width="155px" height="125px"   alt="..."> </span>
               </center>
               @if (session('resent'))
                    <div class="shadow alert alert-success w3-content" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                @endif
                <br><br>
                {{ __('Before proceeding, please check your email for a verification link.') }}
                {{ __('If you did not receive the email, click the button below to resend the link') }}.
                
               <form method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <center>
                        <button type="submit" class="btn btn-success shadow-primary btn-round btn-sm waves-effect waves-light mt-3">Resend activation link</button>
                    </center>
                </form>
              </div>
            </div>
        </div>
    </div>
</div><!--wrapper-->

@endsection
