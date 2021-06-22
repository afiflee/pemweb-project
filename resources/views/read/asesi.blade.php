@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white; border-radius: 10px;">
        <div class="row" style="overflow-x:auto;">
            <div class="col">
            <h1>Asesi</h1>

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
                        <th scope="col">ID Negara</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">HP/Telp</th>
                        <th scope="col">Email</th>
                        <th scope="col">Pendidikan</th>
                        <th scope="col">ID Unit</th>
                        <th scope="col">Created By</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Edited By</th>
                        <th scope="col">Edited At</th>
                        <th scope="col">ID User</th>
                        <th scope="col">Aksi</th>
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
                        <td>{{$ase -> id_ref_negara}}</td>
                        <td>{{$ase -> alamat}}</td>
                        <td>{{$ase -> no_telpon}}</td>
                        <td>{{$ase -> email}}</td>
                        <td>{{$ase -> kualifikasi_pendidikan}}</td>
                        <td>{{$ase -> id_unit}}</td>
                        <td>{{$ase -> created_by}}</td>
                        <td>{{$ase -> created_at}}</td>
                        <td>{{$ase -> edited_by}}</td>
                        <td>{{$ase -> updated_at}}</td>
                        <td>{{$ase -> id_user}}</td>
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
                <a href="{{ url('/home') }}" class="btn bg-success my-3">Kembali ke Homepage</a>
        </div>
    </div>
@endsection
