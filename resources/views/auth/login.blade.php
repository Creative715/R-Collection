@extends('layouts.app_en')
@section('content')
    <!--Body Content-->
    <div id="page-content">
        <!--Page Title-->
        <div class="page section-header text-center">
            <div class="page-title">
                <div class="wrapper">
                    <h1 class="page-width">{{ __('Sign In') }}</h1>
                </div>
            </div>
        </div>
        <!--End Page Title-->

        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 main-col offset-md-3 my-5">
                    <div class="mb-4">
                        <form method="post" action="{{ route('login') }}" id="CustomerLoginForm" accept-charset="UTF-8"
                            class="contact-form">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="CustomerEmail">{{ __('Email Address') }}</label>
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" autocomplete="email" autofocus placeholder=""
                                            id="CustomerEmail" autocorrect="off" autocapitalize="off">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="password">{{ __('Password') }}</label>
                                        <input type="password" id="password" class=""
                                            @error('password') is-invalid @enderror" name="password" required
                                            autocomplete="current-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-4 col-sm-4 col-md-4 col-lg-4 my-3" style="margin-left: 21px;">
                                    <div class="form-group">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                                    </div>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="text-center col-12 col-sm-12 col-md-12 col-lg-12">
                                    <input type="submit" class="btn mb-3" value="{{ __('Sign In') }}">
                                    <p class="mb-4">
                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}"
                                                id="RecoverPassword">{{ __('Forgot Your Password?') }}</a>
                                        @endif &nbsp; | &nbsp;
                                        <a href="{{ route('register') }}" id="customer_register_link">Create account</a>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--End Body Content-->
@endsection
