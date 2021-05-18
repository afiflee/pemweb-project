@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
            <h1>ref kuesioner</h1>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
             @endif

            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">pertanyaan</th>
                        <th scope="col">aktif</th>
                        <th scope="col">aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($rku as $rku)
                    <tr>
                        <th scope="row">{{$loop -> iteration}}</th>
                        <td>{{$rku -> pertanyaan}}</td>
                        <td>{{$rku -> is_aktif}}</td>
                        <td>
                        <a href="/datarku/{{$rku->id}}/edit" class="btn bg-primary">Edit</a>
                        <form action="/datarku/{{$rku->id}}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn bg-danger">Delete</button>
                        </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
                <a href="{{ url('/index/rku') }}" class="btn bg-primary my-3">Tambah Data</a>
                <a href="{{ url('/index') }}" class="btn bg-success my-3">kembali ke halaman utama</a>
        </div>
    </div>
@endsection