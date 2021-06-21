@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white; border-radius: 10px;">
        <div class="row">
            <div class="col">
            <h1>List Jadwal Kegiatan yang tersedia</h1>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
             @endif

            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">nama kegiatan</th>
                        <th scope="col">deskripsi</th>
                        <th scope="col">deskripsi penawaran</th>
                        <th scope="col">tanggal awal</th>
                        <th scope="col">tanggal akhir</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($jadwalrksertifikasi as $jadwalrksertifikasi)
                    <tr>
                        <th scope="row">{{$loop -> iteration}}</th>
                        <td>{{$jadwalrksertifikasi -> nama_kegiatan}}</td>
                        <td>{{$jadwalrksertifikasi -> deskripsi}}</td>
                        <td>{{$jadwalrksertifikasi -> deskripsi_penawaran}}</td>
                        <td>{{$jadwalrksertifikasi -> tanggal_awal}}</td>
                        <td>{{$jadwalrksertifikasi -> tanggal_akhir}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
                <a href="{{ url('/home') }}" class="btn bg-success my-3">Kembali ke Homepage</a>

    </div>
@endsection