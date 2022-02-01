@extends('layouts.auth.main')

@section('auth-content')

{{-- -================================================================== --}}
<div id="wrapper" class="container">
    <div class="height-100v d-flex align-items-center justify-content-center">
       <div class="card border-primary border-top-sm border-bottom-sm card-authentication1 mx-auto my-5">
           <div class="card-body">
            <div class="card-content p-2">
             <div class="card-title text-uppercase text-center pb-2">JMUEKE| ADMIN CONFIG</div>
               <p class="text-center small pb-2">Please confirm your password before continuing.</p>
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
               <form  method="POST" action="{{ route('password.confirm') }}">
                @csrf
                    <div class="form-group">
                        <div class="position-relative has-icon-right">
                            <label for="exampleInputPassword" class="sr-only">Password</label>
                            <input type="password" id="exampleInputPassword" class="form-control @error('password') is-invalid @enderror form-control-sm  form-control-rounded" name="password"  autocomplete="current-password" placeholder="Password">
                            @error('password')
                                <strong class="invalid-feedback text-sm" role="alert">
                                    {{ $message}}
                                </strong>
                            @enderror
                            <div class="form-control-position">
                                <i class="icon-lock"></i>
                            </div>
                        </div>
                    </div>
                    <center>
                        <button type="submit" class="btn btn-primary shadow-primary btn-round btn-sm waves-effect waves-light mt-3">Confirm your password</button>
                    </center>
                    <div class="text-center pt-3">
                        <hr>
                        <p class="text-muted mb-0">
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </p>
                    </div>
                </form>
              </div>
            </div>
        </div>
    </div>
</div><!--wrapper-->

        
@endsection
