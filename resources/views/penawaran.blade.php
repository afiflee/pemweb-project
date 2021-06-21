@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white; border-radius: 10px;">
        <div class="row">
            <div class="col">
            <h1>List Penawaran sertifikasi yang tersedia</h1>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
             @endif

            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">id penawaran</th>
                        <th scope="col">nama Sertifikasi</th>
                        <th scope="col">deskripsi penawaran</th>
                        <th scope="col">Periode</th>
                        <th scope="col">status sertifikasi</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($penawaran as $penawaran)
                    <tr>
                        <th scope="row">{{$loop -> iteration}}</th>
                        <td>{{$penawaran -> id}}</td>
                        <td>{{$penawaran -> nama}}</td>
                        <td>{{$penawaran -> deskripsi_penawaran}}</td>
                        <td>{{$penawaran -> periode}}</td>
                        <td>
                        @if ($penawaran -> is_aktif == 1)
                        Aktif
                        @else
                        Tidak Aktif
                        @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
                <a href="{{ url('/home') }}" class="btn bg-success my-3">Kembali ke Homepage</a>

    </div>
@endsection