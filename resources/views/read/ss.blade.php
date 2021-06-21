@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white; border-radius: 10px;">
        <div class="row">
            <div class="col">
            <h1>syarat sertifikasi</h1>

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
                        <th scope="col">syarat</th>
                        <th scope="col">aktif</th>
                        <th scope="col">aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ss as $ss)
                    <tr>
                        <th scope="row">{{$loop -> iteration}}</th>
                        <td>{{$ss -> id_ref_jenis_sertifikasi}}</td>
                        <td>{{$ss -> syarat}}</td>
                        <td>@if ($ss -> is_aktif == 1)
                        Aktif
                        @else
                        Tidak Aktif
                        @endif</td>
                        <td>
                        <a href="/datass/{{$ss->id}}/edit" class="btn bg-primary">Edit</a>
                        <form action="/datass/{{$ss->id}}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn bg-danger">Delete</button>
                        </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
                <a href="{{ url('/index/ss') }}" class="btn bg-primary my-3">Tambah Data</a>
                <a href="{{ url('/home') }}" class="btn bg-success my-3">kembali ke halaman utama</a>
        </div>
    </div>
@endsection
