@extends('layouts.auth')

@section('title', 'Reset Password')

@section('content')
<h3 class="account-title">Reset Password</h3>
<p class="account-subtitle">Enter your new password</p>

<!-- Account Form -->
<form method="POST" action="{{ route('password.store') }}">
    @csrf
    <input type="hidden" name="token" value="{{ $request->route('token') }}">

    @include('partials.form-input', [
    'name' => 'email',
    'type' => 'email',
    'label' => 'Email Address',
    'placeholder' => 'Enter your email address',
    'required' => true,
    'value' => $request->email
    ])

    @include('partials.password-input', [
    'name' => 'password',
    'label' => 'New Password',
    'placeholder' => 'Enter your new password',
    'required' => true
    ])

    @include('partials.password-input', [
    'name' => 'password_confirmation',
    'id' => 'password_confirmation',
    'label' => 'Confirm New Password',
    'placeholder' => 'Confirm your new password',
    'required' => true
    ])

    @include('partials.submit-button', [
    'text' => 'Reset Password'
    ])

    <div class="account-footer">
        <p>Remember your password? <a href="{{ route('login') }}">Login</a></p>
    </div>
</form>
<!-- /Account Form -->
@endsection