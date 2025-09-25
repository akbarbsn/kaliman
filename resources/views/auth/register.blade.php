@extends('layouts.auth')

@section('title', 'Register')

@section('content')
<h3 class="account-title">Register</h3>
<p class="account-subtitle">Create your account</p>

<!-- Account Form -->
<form method="POST" action="{{ route('register') }}">
    @csrf

    @include('partials.form-input', [
    'name' => 'name',
    'type' => 'text',
    'label' => 'Full Name',
    'placeholder' => 'Enter your full name',
    'required' => true
    ])

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
    'required' => true
    ])

    @include('partials.password-input', [
    'name' => 'password_confirmation',
    'id' => 'password_confirmation',
    'label' => 'Confirm Password',
    'placeholder' => 'Confirm your password',
    'required' => true
    ])

    <div class="input-block mb-3">
        <div class="form-check">
            <input class="form-check-input @error('terms') is-invalid @enderror" type="checkbox" name="terms" id="terms" {{ old('terms') ? 'checked' : '' }} required>
            <label class="form-check-label" for="terms">
                I agree to the <a href="#" target="_blank">Terms and Conditions</a>
            </label>
            @error('terms')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>

    @include('partials.submit-button', [
    'text' => 'Register'
    ])

    <div class="account-footer">
        <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
    </div>
</form>
<!-- /Account Form -->
@endsection