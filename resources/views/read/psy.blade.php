@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white; border-radius: 10px;">
        <div class="row" style="overflow-x:auto;">
            <div class="col">
            <h1>Pendaftar Syarat</h1>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
             @endif

            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID Syarat Sertifikasi</th>
                        <th scope="col">ID Pendaftar</th>
                        <th scope="col">Status Verifikasi Syarat</th>
                        <th scope="col">Path Bukti</th>
                        <th scope="col">Verifikasi Asesor</th>
                        <th scope="col">Komentar Asesor</th>
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
                    @foreach($pendaftarsyarat as $psy)
                    <tr>
                        <th scope="row">{{$loop -> iteration}}</th>
                        <td>{{$psy -> id_syarat_sertifikasi}}</td>
                        <td>{{$psy -> id_pendaftar}}</td>
                        <td>{{$psy -> status_verifikasi_syarat}}</td>
                        <td>{{$psy -> path_bukti}}</td>
                        <td>{{$psy -> verifikasi_asesor}}</td>
                        <td>{{$psy -> komentar_asesor}}</td>
                        <td>{{$psy -> verified_by}}</td>
                        <td>{{$psy -> verified_at}}</td>
                        <td>{{$psy -> created_by}}</td>
                        <td>{{$psy -> created_at}}</td>
                        <td>{{$psy -> edited_by}}</td>
                        <td>{{$psy -> updated_at}}</td>
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
