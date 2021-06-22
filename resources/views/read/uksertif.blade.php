@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white; border-radius: 10px;">
        <div class="row" style="overflow-x:auto;">
            <div class="col">
            <h1>Unit Kompetensi Sertifikasi</h1>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
             @endif

            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID Ref Jenis Sertifikasi</th>
                        <th scope="col">ID Ref Unit Kompetensi</th>
                        <th scope="col">Aktif</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($uksertif as $uks)
                    <tr>
                        <th scope="row">{{$loop -> iteration}}</th>
                        <td>{{$uks -> id_ref_jenis_sertifikasi}}</td>
                        <td>{{$uks -> id_ref_kompetensi}}</td>
                        <td>@if ($uks -> is_aktif == 1)
                        Aktif
                        @else
                        Tidak Aktif
                        @endif</td>
                        <td>
                        <a href="/datauksertif/{{$uks->id}}/edit" class="btn bg-primary">Edit</a>
                        <form action="/datauksertif/{{$uks->id}}" method="POST" class="d-inline">
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
                <a href="{{ url('/index/uksertif') }}" class="btn bg-primary my-3">Tambah Data</a>
                @endhasrole
                <a href="{{ url('/home') }}" class="btn bg-success my-3">Kembali ke Homepage</a>
        </div>
    </div>
@endsection
