@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white; border-radius: 10px;">
        <div class="row">
            <div class="col">
            <h1>pendaftar instrumen</h1>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
             @endif

            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">id pendaftar</th>
                        <th scope="col">id instrumen asesmen</th>
                        <th scope="col">jawaban self asesmen</th>
                        <th scope="col">path bukti</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pendaftarinstrumen as $pi)
                    <tr>
                        <th scope="row">{{$loop -> iteration}}</th>
                        <td>{{$pi -> id_pendaftar}}</td>
                        <td>{{$pi -> id_instrumen_asesmen}}</td>
                        <td>{{$pi -> jawaban_self_asesmen}}</td>
                        <td>{{$pi -> path_bukti}}</td>
                        <td>
                        <a href="/datapi/{{$pi->id}}/edit" class="btn bg-primary">Edit</a>
                        <form action="/datapi/{{$pi->id}}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn bg-danger">Delete</button>
                        </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
                <a href="{{ url('/index/pi') }}" class="btn bg-primary my-3">Tambah Data</a>
                <a href="{{ url('/home') }}" class="btn bg-success my-3">Kembali ke Homepage</a>
        </div>
    </div>
@endsection
