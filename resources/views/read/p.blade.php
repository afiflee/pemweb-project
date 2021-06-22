@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white; border-radius: 10px;">
        <div class="row" style="overflow-x:auto;">
            <div class="col">
            <h1>Pendaftar</h1>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
             @endif

            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID Penawaran Sertifikasi</th>
                        <th scope="col">ID Asesi</th>
                        <th scope="col">Status Akhir Sertifikasi</th>
                        <th scope="col">Tanggal Status Akhir</th>
                        {{-- <th scope="col">Created By</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Edited By</th>
                        <th scope="col">Edited At</th> --}}
                        <th scope="col">Status Pendaftaran</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pendaftar as $p)
                    <tr>
                        <th scope="row">{{$loop -> iteration}}</th>
                        <td>{{$p -> id_penawaran_sertifikasi}}</td>
                        <td>{{$p -> id_asesi}}</td>
                        <td>{{$p -> status_akhir_sertifikasi}}</td>
                        <td>{{$p -> tanggal_status_akhir}}</td>
                        {{-- <td>{{$p -> created_by}}</td>
                        <td>{{$p -> created_at}}</td>
                        <td>{{$p -> edited_by}}</td>
                        <td>{{$p -> updated_at}}</td> --}}
                        <td>{{$p -> status_pendaftaran}}</td>
                        <td>
                        <a href="/datap/{{$p->id}}/edit" class="btn bg-primary">Edit</a>
                        <form action="/datap/{{$p->id}}" method="POST" class="d-inline">
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
                <a href="{{ url('/index/p') }}" class="btn bg-primary my-3">Tambah Data</a>
                @endhasrole
                <a href="{{ url('/home') }}" class="btn bg-success my-3">Kembali ke Homepage</a>
        </div>
    </div>
@endsection
