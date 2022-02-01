@extends('layouts.auth.main')

@section('auth-content')

    <div id="wrapper" class="container">
        <div class="height-100v d-flex align-items-center justify-content-center">
            <div class="card border-primary border-top-sm border-bottom-sm card-authentication1 mx-auto my-5">
                <div class="card-body">
                    <div class="card-content p-2">
                        <div class="text-center">
                            <img src="{{URL::to('frontend/assets/img/logo/jonaLogo.png')}}" width="100%" height="auto" class="img-fluid img-responsive">
                        </div>
                        <div class="card-title text-uppercase text-center py-3">Sign In</div>
                            <form action="{{ route('login') }}" method="post" autocomplete="off">
                                @csrf
                                <div class="form-group">
                                    <div class="position-relative has-icon-right">
                                        <label for="exampleInputEmail" class="sr-only">Email</label>
                                        <input type="email" id="exampleInputEmail" class="form-control  @error('email') is-invalid @enderror  form-control-sm form-control-rounded" 
                                                value="{{ old('email')}}" 
                                                name="email" 
                                                placeholder="Email" />
                                        @error('email')
                                            <strong class="invalid-feedback text-sm">
                                                {{ $message}}
                                            </strong>
                                        @enderror
                                        <div class="form-control-position">
                                            <i class="icon-user"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="position-relative has-icon-right">
                                        <label for="exampleInputPassword" class="sr-only">Password</label>
                                        <input type="password" id="exampleInputPassword" class="form-control @error('password') is-invalid @enderror form-control-sm  form-control-rounded" name="password" placeholder="Password">
                                        @error('password')
                                            <strong class="invalid-feedback text-sm">
                                                {{ $message}}
                                            </strong>
                                        @enderror
                                        <div class="form-control-position">
                                            <i class="icon-lock"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row mr-0 ml-0">
                                    <div class="form-group col-6">
                                        <div class="icheck-primary small">
                                            <input type="checkbox" id="user-checkbox" checked="" />
                                            <label for="user-checkbox">Remember me</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-6 text-right text">
                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}" class="small">Reset Password</a>
                                        @endif
                                    </div>
                                </div>
                                <center>
                                    <button type="submit" class="btn btn-primary shadow-primary btn-round btn-sm waves-effect waves-light">Sign In</button>
                                </center>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->
    </div><!--wrapper-->
	
@endsection
