@extends('layouts.auth.main')

@section('auth-content')

<div id="wrapper" class="container">
    <div class="height-100v d-flex align-items-center justify-content-center">
       <div class="card border-primary border-top-sm border-bottom-sm card-authentication1 mx-auto my-5">
           <div class="card-body">
            <div class="card-content p-2">
             <div class="card-title text-uppercase text-center pb-2">Reset Password</div>
               <p class="text-center small pb-2">Please enter your email address. You will receive a link to create a new password via email.</p>
               @if (session('status'))
                    <div class="shadow alert small alert-success w3-content alert-dismissible fade show" role="alert">
                        <strong>{{ session('status') }}</strong>
                    </div>
                @endif
                @if($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="shadow alert alert-danger w3-content">
                            <small ><i class="fa fa-times" class="close" data-dismiss="alert"></i>  {{ $error }}</small>
                        </div>
                    @endforeach
                @endif
               <form method="POST" action="{{ route('password.email') }}" >
                    @csrf
                    <div class="form-group">
                        <div class="position-relative has-icon-right">
                            <label for="exampleInputEmailAddress" class="sr-only">Email Address</label>
                            <input type="text" id="exampleInputEmailAddress" 
                                    class="form-control form-control-rounded form-control-sm @error('email') is-invalid @enderror" 
                                    placeholder="Email Address"
                                    name="email"
                                    value="{{ old('email')}}"
                                    />
                            <div class="form-control-position">
                                <i class="icon-envelope-open"></i>
                            </div>
                        </div>
                    </div>
                    <center>
                        <button type="submit" class="btn btn-primary shadow-primary btn-round btn-sm waves-effect waves-light mt-3">Sent Email Verification</button>
                    </center>
                    <div class="text-center pt-3">
                        <hr>
                        <p class="text-muted mb-0">Return to the <a href="{{url('/login')}}"> Sign In</a></p>
                    </div>
                </form>
              </div>
            </div>
        </div>
    </div>
</div><!--wrapper-->








@endsection
