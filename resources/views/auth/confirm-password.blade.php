@extends('layouts.auth')

@section('title', 'Confirm Password')

@section('content')
<h3 class="account-title">Confirm Password</h3>
<p class="account-subtitle">Please confirm your password before continuing</p>

<!-- Account Form -->
<form method="POST" action="{{ route('password.confirm') }}">
    @csrf

    @include('partials.password-input', [
    'name' => 'password',
    'label' => 'Password',
    'placeholder' => 'Enter your password',
    'required' => true
    ])

    @include('partials.submit-button', [
    'text' => 'Confirm'
    ])

    <div class="account-footer">
        <p><a href="{{ route('password.request') }}">Forgot your password?</a></p>
    </div>
</form>
<!-- /Account Form -->
@endsection