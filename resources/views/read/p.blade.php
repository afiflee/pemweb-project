@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
            <h1>Pendaftar</h1>

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
                        <th scope="col">id asesi</th>
                        <th scope="col">status akhir</th>
                        <th scope="col">tanggal_status_akhir</th>
                        <th scope="col">status pendaftaran</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pendaftar as $p)
                    <tr>
                        <th scope="row">{{$loop -> iteration}}</th>
                        <td>{{$p -> id_penawaran_sertifikasi}}</td>
                        <td>{{$p -> id_asesi}}</td>
                        <td>{{$p -> status_akhir_sertifikasi}}</td>
                        <td>{{$p -> tanggal_status_akhir}}</td>
                        <td>{{$p -> status_pendaftaran}}</td>
                        <td>
                        <a href="/datap/{{$p->id}}/edit" class="btn bg-primary">Edit</a>
                        <form action="/datap/{{$p->id}}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn bg-danger">Delete</button>
                        </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
                <a href="{{ url('/index/p') }}" class="btn bg-primary my-3">Tambah Data</a>
                <a href="{{ url('/index') }}" class="btn bg-success my-3">kembali ke halaman utama</a>
        </div>
    </div>
@endsection