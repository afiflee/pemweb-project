@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white; border-radius: 10px;">
        <div class="row">
            <div class="col">
            <h1>unit kompetensi sertifikasi</h1>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
             @endif

            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">id ref jenis sertifikasi</th>
                        <th scope="col">id ref kompetensi</th>
                        <th scope="col">aktif</th>
                        <th scope="col">aksi</th>
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
                <a href="{{ url('/index/uksertif') }}" class="btn bg-primary my-3">Tambah Data</a>
                <a href="{{ url('/home') }}" class="btn bg-success my-3">Kembali ke Homepage</a>
        </div>
    </div>
@endsection
