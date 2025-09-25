@extends('layouts.auth')

@section('title', 'Login')

@section('content')
<h3 class="account-title">Login</h3>
<p class="account-subtitle">Access to our dashboard</p>

<!-- Account Form -->
<form method="POST" action="{{ route('login') }}">
    @csrf

    @include('partials.form-input', [
    'name' => 'email',
    'type' => 'email',
    'label' => 'Email Address',
    'placeholder' => 'Enter your email',
    'required' => true
    ])

    @include('partials.password-input', [
    'name' => 'password',
    'label' => 'Password',
    'placeholder' => 'Enter your password',
    'required' => true,
    'showForgotLink' => true,
    'forgotUrl' => route('password.request')
    ])

    <div class="input-block mb-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="remember">
                Remember Me
            </label>
        </div>
    </div>

    @include('partials.submit-button', [
    'text' => 'Login'
    ])

    <div class="account-footer">
        <p>Don't have an account yet? <a href="{{ route('register') }}">Register</a></p>
    </div>
</form>
<!-- /Account Form -->
@endsection