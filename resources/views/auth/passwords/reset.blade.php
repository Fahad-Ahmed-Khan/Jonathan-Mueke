@extends('layouts.auth.main')

@section('auth-content')

    {{-- ----------------========================================= --}}
    <div id="wrapper" class="container">
        <div class="height-100v d-flex align-items-center justify-content-center">
            <div class="card border-primary border-top-sm border-bottom-sm card-authentication1 mx-auto my-5">
                <div class="card-body">
                    <div class="card-content p-2">
                        <div class="card-title text-uppercase text-center py-3">Reset My Password</div>
                            <form method="POST" action="{{ route('password.update') }}" autocomplete="off">
                                @csrf
                                <div class="form-group">
                                    <div class="position-relative has-icon-right">
                                        <input type="hidden" name="token" value="{{ $token }}">
                                        <label for="exampleInputEmail" class="sr-only">Email</label>
                                        <input type="email" id="exampleInputEmail" 
                                                class="form-control @error('email') is-invalid @enderror form-control-sm form-control-rounded" 
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
                                        <input type="password" id="exampleInputPassword" 
                                                class="form-control @error('password') is-invalid @enderror form-control-sm  form-control-rounded" 
                                                name="password" placeholder="Password">
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
                                <div class="form-group">
                                    <div class="position-relative has-icon-right">
                                        <label for="exampleInputPassword" class="sr-only">Confirm Password</label>
                                        <input type="password" id="exampleInputPassword" 
                                                class="form-control form-control-sm  form-control-rounded" 
                                                name="password_confirmation" 
                                                placeholder="Confirm Password"
                                            />
                                        <div class="form-control-position">
                                            <i class="icon-lock"></i>
                                        </div>
                                    </div>
                                </div>
                                <center>
                                    <button type="submit" class="btn btn-primary shadow-primary btn-round btn-sm waves-effect waves-light">Reset Password</button>
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
