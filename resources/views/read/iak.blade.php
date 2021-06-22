@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white; border-radius: 10px;">
        <div class="row" style="overflow-x:auto;">
            <div class="col">
            <h1>Instrumen Asesmen Kompetensi</h1>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
             @endif

            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID Ref Unit Komptensi</th>
                        <th scope="col">Instrumen Pertanyaan</th>
                        <th scope="col">Status Instrumen</th>
                        <th scope="col">Aktif</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($iak as $iak)
                    <tr>
                        <th scope="row">{{$loop -> iteration}}</th>
                        <td>{{$iak -> id_ref_unit_kompetensi}}</td>
                        <td>{{$iak -> instrumen_pertanyaan}}</td>
                        <td>{{$iak -> status_instrumen}}</td>
                        <td>@if ($iak -> is_aktif == 1)
                        Aktif
                        @else
                        Tidak Aktif
                        @endif</td>
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
                <a href="{{ url('/home') }}" class="btn bg-success my-3">Kembali ke Homepage</a>
        </div>
    </div>
@endsection
