@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white; border-radius: 10px;">
        <div class="row">
            <div class="col">
            <h1>Jadwal</h1>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
             @endif

            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">id penawaran</th>
                        <th scope="col">id kegiatan</th>
                        <th scope="col">tanggal awal</th>
                        <th scope="col">tanggal akhir</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($jadwal as $jadwal)
                    <tr>
                        <th scope="row">{{$loop -> iteration}}</th>
                        <td>{{$jadwal -> id_penawaran_sertifikasi}}</td>
                        <td>{{$jadwal -> id_kegiatan}}</td>
                        <td>{{$jadwal -> tanggal_awal}}</td>
                        <td>{{$jadwal -> tanggal_akhir}}</td>
                        <td>
                        <a href="/datajadwal/{{$jadwal->id}}/edit" class="btn bg-primary">Edit</a>
                        <form action="/datajadwal/{{$jadwal->id}}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn bg-danger">Delete</button>
                        </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
                <a href="{{ url('/index/jadwal') }}" class="btn bg-primary my-3">Tambah Data</a>
                <a href="{{ url('/index') }}" class="btn bg-success my-3">kembali ke halaman utama</a>
        </div>
    </div>
@endsection