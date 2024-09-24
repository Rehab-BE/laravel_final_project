@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 d-none d-lg-block">
            <img src="{{asset('assets_admin/images/rear-view-young-college-student.jpg')}}" alt="" class="img-fluid rounded-end" style="height:100%; object-fit: cover;">
        </div>
        <div class="col-lg-6 col-md-8">
            <div class="card rounded-3 shadow-lg">
                <div class="card-header text-center">{{ __('Registration Form') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" class="d-flex flex-column">
                        @csrf

                        <div class="form-group d-flex mb-3">
                            <input id="first_name" type="text" placeholder="First Name" class="form-control me-2 @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
                            @error('first_name')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                            <input id="last_name" type="text" placeholder="Last Name" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name">
                            @error('last_name')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="input-group mb-3">
                            <input id="user_name" type="text" placeholder="Username" class="form-control @error('user_name') is-invalid @enderror" name="user_name" value="{{ old('user_name') }}" required autocomplete="user_name">
                            <div class="input-group-text">
                                <img src="{{asset('assets_admin/images/user-svgrepo-com.svg')}}" alt="User Icon" width="20">
                            </div>
                            @error('user_name')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <input id="mobile" type="text" placeholder="mobile" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile">
                            <div class="input-group-text">
                                <!-- <img src="{{asset('assets_admin/images/user-svgrepo-com.svg')}}" alt="User Icon" width="20"> -->
                            </div>
                            @error('mobile')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="input-group mb-3">
                            <input id="email" type="email" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            <div class="input-group-text">
                                <img src="{{asset('assets_admin/images/email-svgrepo-com.svg')}}" alt="Email Icon" width="20">
                            </div>
                            @error('email')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="input-group mb-3">
                            <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            <div class="input-group-text">
                                <img src="{{asset('assets_admin/images/password-svgrepo-com.svg')}}" alt="Password Icon" width="20">
                            </div>
                            @error('password')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="input-group mb-5">
                            <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            <div class="input-group-text">
                                <img src="{{asset('assets_admin/images/password-svgrepo-com.svg')}}" alt="Confirm Password Icon" width="20">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-dark mb-2">
                            {{ __('Register') }}
                            <img src="{{asset('assets_admin/images/arrow-sm-right-svgrepo-com.svg')}}" alt="Arrow Icon" width="20">
                        </button>
                        <a href="{{route('login')}}" class="fw-semibold text-decoration-none">Already have an account?</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection