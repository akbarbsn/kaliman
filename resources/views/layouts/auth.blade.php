<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Kaliman - HR Management System">
    <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
    <meta name="author" content="Kaliman HRIS">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Kaliman') - {{ config('app.name', 'HRIS') }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets-dashboard/img/favicon.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets-dashboard/css/bootstrap.min.css') }}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets-dashboard/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-dashboard/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-dashboard/css/material.css') }}">

    <!-- Line Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets-dashboard/css/line-awesome.min.css') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('assets-dashboard/css/style.css') }}">

    <!-- Auth Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets-dashboard/css/auth-custom.css') }}">

    @stack('styles')
</head>

<body class="account-page">

    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <div class="account-content">
            <div class="container">
                <div class="account-box">
                    <div class="account-wrapper">
                        @include('partials.alerts')
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Main Wrapper -->

    @include('partials.loading')

    <!-- jQuery -->
    <script src="{{ asset('assets-dashboard/js/jquery-3.7.0.min.js') }}"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ asset('assets-dashboard/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Custom JS -->
    <script src="{{ asset('assets-dashboard/js/app.js') }}"></script>

    @stack('scripts')

</body>

</html>