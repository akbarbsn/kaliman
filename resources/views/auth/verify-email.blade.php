@extends('layouts.auth')

@section('title', 'Verify Email')

@section('content')
<h3 class="account-title">Verify Your Email</h3>
<p class="account-subtitle">We've sent a verification link to your email address</p>

@if (session('status') == 'verification-link-sent')
<div class="alert alert-success" role="alert">
    A new verification link has been sent to your email address.
</div>
@endif

<div class="text-center mb-4">
    <p>Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you?</p>
</div>

<div class="d-flex justify-content-between align-items-center">
    <!-- Resend Verification Form -->
    <form method="POST" action="{{ route('verification.send') }}">
        @csrf
        <button type="submit" class="btn btn-primary">
            Resend Verification Email
        </button>
    </form>

    <!-- Logout Form -->
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-link text-muted">
            Log Out
        </button>
    </form>
</div>
@endsection