@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white; border-radius: 10px;">
        <div class="row" style="overflow-x:auto;">
            <div class="col">
            <h1>Asesor Jenis Sertifikasi</h1>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
             @endif

            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID Asesor</th>
                        <th scope="col">ID Ref Jenis Sertifikasi</th>
                        <th scope="col">Tanggal Berlaku</th>
                        <th scope="col">Tanggal Kadaluwarsa</th>
                        <th scope="col">Nomor Sertifikat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ajs as $ajs)
                    <tr>
                        <th scope="row">{{$loop -> iteration}}</th>
                        <td>{{$ajs -> id_asesor}}</td>
                        <td>{{$ajs -> id_ref_jenis_sertifikasi}}</td>
                        <td>{{$ajs -> tanggal_awal_berlaku}}</td>
                        <td>{{$ajs -> tanggal_akhir_berlaku}}</td>
                        <td>{{$ajs -> no_sertifikat}}</td>
                        <td>
                        <a href="/dataajs/{{$ajs->id}}/edit" class="btn bg-primary">Edit</a>
                        <form action="/dataajs/{{$ajs->id}}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn bg-danger">Delete</button>
                        </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
                <a href="{{ url('/index/ajs') }}" class="btn bg-primary my-3">Tambah Data</a>
                <a href="{{ url('/home') }}" class="btn bg-success my-3">Kembali ke Homepage</a>
        </div>
    </div>
@endsection
