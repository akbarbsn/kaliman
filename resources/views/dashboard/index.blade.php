@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Dashboard</h4>
                </div>
                <div class="card-body">
                    <p>Selamat datang di Kaliman HRIS, {{ auth()->user()->name }}!</p>

                    <div class="alert alert-success" role="alert">
                        Anda berhasil login ke sistem HRIS Kaliman.
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dash-widget">
                                        <span class="dash-widget-bg1"><i class="fa fa-users" aria-hidden="true"></i></span>
                                        <div class="dash-widget-info">
                                            <h3>115</h3>
                                            <span>Karyawan</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dash-widget">
                                        <span class="dash-widget-bg2"><i class="fa fa-user-tie"></i></span>
                                        <div class="dash-widget-info">
                                            <h3>21</h3>
                                            <span>Departemen</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dash-widget">
                                        <span class="dash-widget-bg3"><i class="fa fa-file-alt" aria-hidden="true"></i></span>
                                        <div class="dash-widget-info">
                                            <h3>218</h3>
                                            <span>Dokumen</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dash-widget">
                                        <span class="dash-widget-bg4"><i class="fa fa-calendar-check" aria-hidden="true"></i></span>
                                        <div class="dash-widget-info">
                                            <h3>31</h3>
                                            <span>Absensi Hari ini</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-danger">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection