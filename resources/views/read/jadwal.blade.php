@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white; border-radius: 10px;">
        <div class="row" style="overflow-x:auto;">
            <div class="col">
            <h1>Jadwal</h1>

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
                        <th scope="col">ID Kegiatan</th>
                        <th scope="col">Tanggal Mulai</th>
                        <th scope="col">Tanggal Selesai</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Created By</th>
                        <th scope="col">Aktif</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($jadwal as $jadwal)
                    <tr>
                        <th scope="row">{{$loop -> iteration}}</th>
                        <td>{{$jadwal -> id_penawaran_sertifikasi}}</td>
                        <td>{{$jadwal -> id_kegiatan}}</td>
                        <td>{{$jadwal -> tanggal_awal}}</td>
                        <td>{{$jadwal -> tanggal_akhir}}</td>
                        <td>{{$jadwal -> created_at}}</td>
                        <td>{{$jadwal -> created_by}}</td>
                        <td>{{$jadwal -> is_show}}</td>
                        <td>
                        <a href="/datajadwal/{{$jadwal->id}}/edit" class="btn bg-primary">Edit</a>
                        <form action="/datajadwal/{{$jadwal->id}}" method="POST" class="d-inline">
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
                <a href="{{ url('/index/jadwal') }}" class="btn bg-primary my-3">Tambah Data</a>
                @endhasrole
                <a href="{{ url('/home') }}" class="btn bg-success my-3">Kembali ke Homepage</a>
        </div>
    </div>
@endsection
