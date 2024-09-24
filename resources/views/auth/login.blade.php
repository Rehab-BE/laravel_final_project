@extends('layouts.app')

@section('content')
<div class="registeration-wrapper" style="background-image: linear-gradient(rgba(255, 255, 255, 0.735), rgba(0, 0, 0, 0.5));">
    <div class="container my-5 bg-white rounded-3">
        <div class="row">
            <div class="col-md-5 d-none d-md-flex justify-content-center align-items-center img-wrapper">
                <img src="{{ asset('assets_admin/images/rear-view-young-college-student.jpg') }}" alt="" class="img-fluid">
            </div>
            <div class="col-md-7">
                <form method="POST" action="{{ route('login') }}" class="text-center h-100 px-3 d-flex flex-column justify-content-center">
                    @csrf
                    <h3 class="fw-semibold mb-4">LOGIN FORM</h3>

                    <div class="input-group mb-3">
                        <input id="email" type="email" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <span class="input-group-text"><img src="{{ asset('assets_admin/images/user-svgrepo-com.svg') }}" alt=""></span>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        <span class="input-group-text"><img src="{{ asset('assets_admin/images/password-svgrepo-com.svg') }}" alt=""></span>

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6 offset-md-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-dark px-5 mb-2">
                        LOGIN
                        <img src="{{ asset('assets_admin/images/arrow-sm-right-svgrepo-com.svg') }}" alt="">
                    </button>

                    <a href="{{ route('register') }}" class="fw-semibold fs-6 text-decoration-none text-dark">New User?</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

<style>
    .img-wrapper img {
        max-width: 100%; /* Ensure the image is responsive */
        height: auto;    /* Maintain aspect ratio */
    }

    @media (max-width: 767px) {
        .img-wrapper {
            display: none; /* Hide image on small devices */
        }
    }

    @media (min-width: 768px) {
        .registeration-wrapper {
            min-height: 100vh; /* Make the wrapper at least the height of the viewport */
        }
    }
</style>
