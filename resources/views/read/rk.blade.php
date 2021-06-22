@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white; border-radius: 10px;">
        <div class="row" style="overflow-x:auto;">
            <div class="col">
            <h1>ref kegiatan</h1>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
             @endif

            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Kegiatan</th>
                        <th scope="col">deskripsi</th>
                        <th scope="col">creator</th>
                        <th scope="col">aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($rk as $rk)
                    <tr>
                        <th scope="row">{{$loop -> iteration}}</th>
                        <td>{{$rk -> nama_kegiatan}}</td>
                        <td>{{$rk -> deskripsi}}</td>
                        <td>{{$rk -> created_by}}</td>
                        <td>
                        <a href="/datark/{{$rk->id}}/edit" class="btn bg-primary">Edit</a>
                        <form action="/datark/{{$rk->id}}" method="POST" class="d-inline">
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
                <a href="{{ url('/index/rk') }}" class="btn bg-primary my-3">Tambah Data</a>
                @endhasrole
                <a href="{{ url('/home') }}" class="btn bg-success my-3">Kembali ke Homepage</a>
        </div>
    </div>
@endsection
