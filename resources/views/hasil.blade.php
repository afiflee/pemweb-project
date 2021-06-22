@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white; border-radius: 10px;">
        <div class="row">
            <div class="col">
            <h1>Hasil sertifikasi Anda</h1>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
             @endif

            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">&nbsp;</th>
                        <th scope="col">Sertifikasi</th>
                        <th scope="col">Hasil</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($hasil as $hasil)
                    <tr>
                        <th scope="row">{{$loop -> iteration}}</th>
                        <td>{{$hasil -> nama}}</td>
                        <td>{{$hasil -> hasil}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
                <a href="{{ url('/home') }}" class="btn bg-success my-3" style="color: white">Kembali ke Homepage</a>

    </div>
@endsection
