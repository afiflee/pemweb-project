@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Selamat Datang di Website Sertifikasi!') }}
                </div>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col-6">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Daftar</h5>
                    <p class="card-text">Daftarkan data diri anda.</p>
                    <a href="{{ url('/index/asesi') }}" class="btn bg-primary my-3">Daftar Asesi</a>
                    <a href="{{ url('/index/asesor') }}" class="btn bg-primary my-3">Daftar Asesor</a>
                </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">List Sertifikasi</h5>
                    <p class="card-text">Lihat sertifikasi yang tersedia.</p>
                    <a href="{{ url('/index/datarjs') }}" class="btn bg-primary my-3">Sertifikasi</a>
                </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Jadwal Kegiatan</h5>
                    <p class="card-text">Lihat jadwal dan keterangan kegiatan dari sertifikasi yang tersedia.</p>
                    <a href="{{ url('/index/datark') }}" class="btn bg-primary my-3">List</a>
                </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Penawaran</h5>
                    <p class="card-text">Penawaran Sertifikasi</p>
                    <a href="{{ url('/index/datark') }}" class="btn bg-primary my-3">List</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
