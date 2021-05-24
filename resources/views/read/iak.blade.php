@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
            <h1>instrumen asesmen kompetensi</h1>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
             @endif

            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">id_ref_unit_kompetensi</th>
                        <th scope="col">instrumen_pertanyaan</th>
                        <th scope="col">status_instrumen</th>
                        <th scope="col">aktif</th>
                        <th scope="col">aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($iak as $iak)
                    <tr>
                        <th scope="row">{{$loop -> iteration}}</th>
                        <td>{{$iak -> id_ref_unit_kompetensi}}</td>
                        <td>{{$iak -> instrumen_pertanyaan}}</td>
                        <td>{{$iak -> status_instrumen}}</td>
                        <td>{{$iak -> is_aktif}}</td>
                        <td>
                        <a href="/dataiak/{{$iak->id}}/edit" class="btn bg-primary">Edit</a>
                        <form action="/dataiak/{{$iak->id}}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn bg-danger">Delete</button>
                        </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
                <a href="{{ url('/index/iak') }}" class="btn bg-primary my-3">Tambah Data</a>
                <a href="{{ url('/index') }}" class="btn bg-success my-3">kembali ke halaman utama</a>
        </div>
    </div>
@endsection