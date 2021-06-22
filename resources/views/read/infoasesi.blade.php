@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white; border-radius: 10px;">
        <div class="row">
            <div class="col">
            <h1>Data Asesi</h1>
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Nama : {{$asesi -> nama}}</h3>
                    <p class="card-text">NIM : {{$asesi -> nim}}</p>
                    <p class="card-text">NIK : {{$asesi -> nik}}</p>
                    <p class="card-text">Tempat Lahir : {{$asesi -> tempat_lahir}}</p>
                    <p class="card-text">Tanggal Lahir : {{$asesi -> tanggal_lahir}}</p>
                    <p class="card-text">Jenis Kelamin : {{$asesi -> jenis_kelamin}}</p>
                    <p class="card-text">Alamat : {{$asesi -> alamat}}</p>
                    <p class="card-text">No Telpon : {{$asesi -> no_telpon}}</p>
                    <p class="card-text">email : {{$asesi -> email}}</p>
                    <p class="card-text">Kualifikasi Pendidikan : {{$asesi -> kualifikasi_pendidikan}}</p>
                </div>
            </div>
                <a href="{{ url('/home') }}" class="btn bg-success my-3" style="color: white">Kembali ke Homepage</a>

    </div>
@endsection