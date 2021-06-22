@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white; border-radius: 10px;">
        <div class="row" style="overflow-x:auto;">
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
                        <th scope="col">ID Pendaftar</th>
                        <th scope="col">ID Kuesioner</th>
                        <th scope="col">Jawaban</th>
                        <th scope="col">Created By</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Edited By</th>
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
                        <td>{{$pendaftarkuesioner -> created_by}}</td>
                        <td>{{$pendaftarkuesioner -> created_at}}</td>
                        <td>{{$pendaftarkuesioner -> edited_by}}</td>
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
                <a href="{{ url('/home') }}" class="btn bg-success my-3">Kembali ke Homepage</a>
        </div>
    </div>
@endsection
