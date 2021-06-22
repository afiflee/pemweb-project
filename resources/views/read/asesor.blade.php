@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white; border-radius: 10px;">
        <div class="row" style="overflow-x:auto;">
            <div class="col">
            <h1>Asesor</h1>

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
                        <th scope="col">NIM</th>
                        <th scope="col">NIK</th>
                        <th scope="col">Tempat Lahir</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">No Telepon</th>
                        <th scope="col">Email</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($asesor as $ase)
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
                        <a href="/dataasesor/{{$ase->id}}/edit" class="btn bg-primary">Edit</a>
                        <form action="/dataasesor/{{$ase->id}}" method="POST" class="d-inline">
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
                <a href="{{ url('/index/asesor') }}" class="btn bg-primary my-3">Tambah Data</a>
                @endhasrole
                <a href="{{ url('/home') }}" class="btn bg-success my-3">Kembali ke Homepage</a>
        </div>
    </div>
@endsection
