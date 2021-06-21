@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white; border-radius: 10px;">
        <div class="row">
            <div class="col">
            <h1>penawaran sertifikasi</h1>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
             @endif

            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">deskripsi_penawaran</th>
                        <th scope="col">periode</th>
                        <th scope="col">created_at</th>
                        <th scope="col">updated_at</th>
                        <th scope="col">aktif</th>
                        <th scope="col">aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ps as $ps)
                    <tr>
                        <th scope="row">{{$loop -> iteration}}</th>
                        <td>{{$ps -> deskripsi_penawaran}}</td>
                        <td>{{$ps -> periode}}</td>
                        <td>{{$ps -> created_at}}</td>
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
