@extends('layouts.app')

@section('content')
    <!-- HERO SECTION-->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
                <div class="col-lg-6">
                    <h1 class="h2 text-uppercase mb-0">{{ __('Reset Password') }}</h1>
                </div>
                <div class="col-lg-6 text-lg-end">

                </div>
            </div>
        </div>
    </section>
    <section class="py-5 w-50 mx-auto mb-5">
        <h2 class="h5 text-uppercase mb-4">{{ __('Reset Password') }}</h2>

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">

            <div class="form-group mb-3">
                <label for="email" class="form-label text-uppercase">{{ __('Email Address') }}</label>

                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="password" class="form-label text-uppercase">{{ __('Password') }}</label>


                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>

            <div class="form-group mb-3">
                <label for="password-confirm" class="form-label text-uppercase">{{ __('Confirm Password') }}</label>


                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                    autocomplete="new-password" placeholder="Enter your password">

            </div>

            <div class="form-group mb-0">

                <button type="submit" class="btn btn-dark">
                    {{ __('Reset Password') }}
                </button>
            </div>
        </form>
    </section>
@endsection
