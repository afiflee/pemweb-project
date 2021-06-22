@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white; border-radius: 10px;">
        <div class="row" style="overflow-x:auto;">
            <div class="col">
            <h1>Pendaftar Instrumen</h1>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
             @endif

            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID Pendaftar</th>
                        <th scope="col">ID Instrumen Asesmen</th>
                        <th scope="col">Jawaban Self Asesmen</th>
                        <th scope="col">Path Bukti</th>
                        <th scope="col">Komentar Bukti</th>
                        <th scope="col">Jawaban Asesor Verifikasi</th>
                        <th scope="col">Verified By</th>
                        <th scope="col">Verified At</th>
                        <th scope="col">Created By</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Edited By</th>
                        <th scope="col">Edited At</th>
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
                        <td>{{$pi -> komentar_bukti}}</td>
                        <td>{{$pi -> jawaban_asesor_verifikasi}}</td>
                        <td>{{$pi -> verified_by}}</td>
                        <td>{{$pi -> verified_at}}</td>
                        <td>{{$pi -> created_by}}</td>
                        <td>{{$pi -> created_at}}</td>
                        <td>{{$pi -> edited_by}}</td>
                        <td>{{$pi -> updated_at}}</td>
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
