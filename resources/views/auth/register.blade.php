@extends('layouts.app')

@section('content')
    <!-- HERO SECTION-->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
                <div class="col-lg-6">
                    <h1 class="h2 text-uppercase mb-0">Register</h1>
                </div>
                <div class="col-lg-6 text-lg-end">

                </div>
            </div>
        </div>
    </section>
    <section class="py-5 w-50 mx-auto mb-5">
        <h2 class="h5 text-uppercase mb-4">Register</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group mb-3">
                <label for="first_name" class="form-label text-uppercase">First Name</label>

                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror"
                    name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus
                    placeholder="Enter your first name">

                @error('first_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="last_name" class="form-label text-uppercase">Last Name</label>

                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror"
                    name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus
                    placeholder="Enter your last name">

                @error('last_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="username" class="form-label text-uppercase">Username</label>

                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror"
                    name="username" value="{{ old('username') }}" required autocomplete="username" autofocus
                    placeholder="Enter your username">

                @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="email" class="form-label text-uppercase">{{ __('Email Address') }}</label>

                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" placeholder="Enter your email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="mobile" class="form-label text-uppercase">Mobile Number</label>

                <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile"
                    value="{{ old('mobile') }}" required autocomplete="mobile" placeholder="Enter your mobile">

                @error('mobile')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="password" class="form-label text-uppercase">{{ __('Password') }}</label>

                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="new-password" placeholder="Enter your password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="password-confirm" class="form-label text-uppercase">{{ __('Confirm Password') }}</label>

                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                    autocomplete="new-password" placeholder="Enter confirm password">
            </div>

            <div class="form-group mb-0">
                <button type="submit" class="btn btn-dark">
                    {{ __('Register') }}
                </button>
                <a class="btn btn-link text-decoration-none" href="{{ route('login') }}">
                    Have an account?
                </a>
            </div>
        </form>

    </section>
@endsection
