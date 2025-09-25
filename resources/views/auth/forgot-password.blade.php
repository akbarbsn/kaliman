@extends('layouts.auth')

@section('title', 'Forgot Password')

@section('content')
<h3 class="account-title">Forgot Password?</h3>
<p class="account-subtitle">Enter your email to get a password reset link</p>

@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif

<!-- Account Form -->
<form method="POST" action="{{ route('password.email') }}">
    @csrf

    @include('partials.form-input', [
    'name' => 'email',
    'type' => 'email',
    'label' => 'Email Address',
    'placeholder' => 'Enter your email address',
    'required' => true
    ])

    @include('partials.submit-button', [
    'text' => 'Send Reset Link'
    ])

    <div class="account-footer">
        <p>Remember your password? <a href="{{ route('login') }}">Login</a></p>
    </div>
</form>
<!-- /Account Form -->
@endsection