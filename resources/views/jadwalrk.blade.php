@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white; border-radius: 10px;">
        <div class="row">
            <div class="col">
            <h1>List jadwal kegiatan</h1>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
             @endif

            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Kegiatan</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Penawaran</th>
                        <th scope="col">Tanggal Mulai</th>
                        <th scope="col">Tanggal Selesai</th>
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
                <a href="{{ url('/home') }}" class="btn bg-success my-3" style="color: white">Kembali ke Homepage</a>

    </div>
@endsection
