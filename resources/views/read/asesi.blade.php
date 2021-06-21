@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white; border-radius: 10px;">
        <div class="row">
            <div class="col">
            <h1>asesi</h1>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
             @endif

            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">nim</th>
                        <th scope="col">nik</th>
                        <th scope="col">tempat lahir</th>
                        <th scope="col">tanggal lahir</th>
                        <th scope="col">jenis kelamin</th>
                        <th scope="col">alamat</th>
                        <th scope="col">no telpon</th>
                        <th scope="col">email</th>
                        <th scope="col">aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($asesi as $ase)
                    <tr>
                        <th scope="row">{{$loop -> iteration}}</th>
                        <td>{{$ase -> nama}}</td>
                        <td>{{$ase -> nim}}</td>
                        <td>{{$ase -> nik}}</td>
                        <td>{{$ase -> tempat_lahir}}</td>
                        <td>{{$ase -> tanggal_lahir}}</td>
                        <td>{{$ase -> jenis_kelamin}}</td>
                        <td>{{$ase -> alamat}}</td>
                        <td>{{$ase -> no_telpon}}</td>
                        <td>{{$ase -> email}}</td>
                        <td>
                        <a href="/dataasesi/{{$ase->id}}/edit" class="btn bg-primary">Edit</a>
                        <form action="/dataasesi/{{$ase->id}}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn bg-danger">Delete</button>
                        </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
                <a href="{{ url('/index/asesi') }}" class="btn bg-primary my-3">Tambah Data</a>
                <a href="{{ url('/home') }}" class="btn bg-success my-3">kembali ke halaman utama</a>
        </div>
    </div>
@endsection
