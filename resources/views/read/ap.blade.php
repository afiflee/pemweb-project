@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white; border-radius: 10px;">
        <div class="row" style="overflow-x:auto;">
            <div class="col">
            <h1>Asesor Pendaftar</h1>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
             @endif

            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID Asesor Jenis Sertifikasi</th>
                        <th scope="col">ID Pendaftar</th>
                        <th scope="col">Hasil</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ap as $ap)
                    <tr>
                        <th scope="row">{{$loop -> iteration}}</th>
                        <td>{{$ap -> id_asesor_jenis_sertifikasi}}</td>
                        <td>{{$ap -> id_pendaftar}}</td>
                        <td>{{$ap -> hasil}}</td>
                        <td>
                        <a href="/dataap/{{$ap->id}}/edit" class="btn bg-primary">Edit</a>
                        <form action="/dataap/{{$ap->id}}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn bg-danger">Delete</button>
                        </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
                @hasrole('admin')
                <a href="{{ url('/index/ap') }}" class="btn bg-primary my-3">Tambah Data</a>
                @endhasrole
                <a href="{{ url('/home') }}" class="btn bg-success my-3">Kembali ke Homepage</a>
        </div>
    </div>
@endsection
