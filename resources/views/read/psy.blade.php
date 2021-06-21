@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white; border-radius: 10px;">
        <div class="row">
            <div class="col">
            <h1>pendaftar syarat</h1>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
             @endif

            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">id syarat</th>
                        <th scope="col">id pendaftar</th>
                        <th scope="col">status verifikasi syarat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pendaftarsyarat as $psy)
                    <tr>
                        <th scope="row">{{$loop -> iteration}}</th>
                        <td>{{$psy -> id_syarat_sertifikasi}}</td>
                        <td>{{$psy -> id_pendaftar}}</td>
                        <td>{{$psy -> status_verifikasi_syarat}}</td>
                        <td>
                        <a href="/datapsy/{{$psy->id}}/edit" class="btn bg-primary">Edit</a>
                        <form action="/datapsy/{{$psy->id}}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn bg-danger">Delete</button>
                        </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
                <a href="{{ url('/index/psy') }}" class="btn bg-primary my-3">Tambah Data</a>
                <a href="{{ url('/home') }}" class="btn bg-success my-3">Kembali ke Homepage</a>
        </div>
    </div>
@endsection
