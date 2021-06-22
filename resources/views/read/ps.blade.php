@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white; border-radius: 10px;">
        <div class="row" style="overflow-x:auto;">
            <div class="col">
            <h1>Penawaran Sertifikasi</h1>

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
                        <th scope="col">Deskripsi Penawaran</th>
                        <th scope="col">Periode</th>
                        <th scope="col">Created By</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Edited By</th>
                        <th scope="col">Edited At</th>
                        <th scope="col">Aktif</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ps as $ps)
                    <tr>
                        <th scope="row">{{$loop -> iteration}}</th>
                        <td>{{$ps -> deskripsi_penawaran}}</td>
                        <td>{{$ps -> periode}}</td>
                        <td>{{$ps -> created_at}}</td>
                        <td>{{$ps -> edited_by}}</td>
                        <td>{{$ps -> updated_at}}</td>
                        <td>@if ($ps -> is_aktif == 1)
                        Aktif
                        @else
                        Tidak Aktif
                        @endif</td>
                        <td>
                        <a href="/dataps/{{$ps->id}}/edit" class="btn bg-primary">Edit</a>
                        <form action="/dataps/{{$ps->id}}" method="POST" class="d-inline">
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
                <a href="{{ url('/index/ps') }}" class="btn bg-primary my-3">Tambah Data</a>
                @endhasrole
                <a href="{{ url('/home') }}" class="btn bg-success my-3">Kembali ke Homepage</a>
        </div>
    </div>
@endsection
