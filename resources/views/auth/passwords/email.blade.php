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
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="form-group mb-3">
                <label for="email" class="form-label text-uppercase">{{ __('Email Address') }}</label>


                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>

            <div class="form-group mb-0">

                <button type="submit" class="btn btn-dark">
                    {{ __('Send Password Reset Link') }}
                </button>

            </div>
        </form>
    </section>
@endsection
