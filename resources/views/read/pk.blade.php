@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white; border-radius: 10px;">
        <div class="row">
            <div class="col">
            <h1>Pendaftar Kuesioner</h1>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
             @endif

            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">id_pendaftar</th>
                        <th scope="col">id_kuesioner</th>
                        <th scope="col">jawaban</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pendaftarkuesioner as $pendaftarkuesioner)
                    <tr>
                        <th scope="row">{{$loop -> iteration}}</th>
                        <td>{{$pendaftarkuesioner -> id_pendaftar}}</td>
                        <td>{{$pendaftarkuesioner -> id_kuesioner}}</td>
                        <td>{{$pendaftarkuesioner -> jawaban}}</td>
                        <td>
                        <a href="/datapk/{{$pendaftarkuesioner->id}}/edit" class="btn bg-primary">Edit</a>
                        <form action="/datapk/{{$pendaftarkuesioner->id}}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn bg-danger">Delete</button>
                        </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
                <a href="{{ url('/index/pk') }}" class="btn bg-primary my-3">Tambah Data</a>
                <a href="{{ url('/home') }}" class="btn bg-success my-3">kembali ke halaman utama</a>
        </div>
    </div>
@endsection
