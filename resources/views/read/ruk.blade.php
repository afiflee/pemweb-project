@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white; border-radius: 10px;">
        <div class="row" style="overflow-x:auto;">
            <div class="col">
            <h1>ref unit kompetensi</h1>

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
                        <th scope="col">aktif</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ruk as $ruk)
                    <tr>
                        <th scope="row">{{$loop -> iteration}}</th>
                        <td>{{$ruk -> nama}}</td>
                        <td>@if ($ruk -> is_aktif == 1)
                        Aktif
                        @else
                        Tidak Aktif
                        @endif</td>
                        <td>
                        <a href="/dataruk/{{$ruk->id}}/edit" class="btn bg-primary">Edit</a>
                        <form action="/dataruk/{{$ruk->id}}" method="POST" class="d-inline">
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
                <a href="{{ url('/index/ruk') }}" class="btn bg-primary my-3">Tambah Data</a>
                @endhasrole
                <a href="{{ url('/home') }}" class="btn bg-success my-3">Kembali ke Homepage</a>
        </div>
    </div>
@endsection
