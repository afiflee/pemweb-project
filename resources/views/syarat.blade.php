@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white; border-radius: 10px;">
        <div class="row">
            <div class="col">
            <h1>List Syarat Sertifikasi</h1>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
             @endif

            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">&nbsp;</th>
                        <th scope="col">nama Sertifikasi</th>
                        <th scope="col">Status Sertifikasi</th>
                        <th scope="col">Syarat</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($syarat as $syarat)
                    <tr>
                        <th scope="row">{{$loop -> iteration}}</th>
                        <td>{{$syarat -> nama}}</td>
                        <td>{{$syarat -> status_jenis_sertifikasi}}</td>
                        <td>{{$syarat -> syarat}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
                <a href="{{ url('/home') }}" class="btn bg-success my-3" style="color: white">Kembali ke Homepage</a>

    </div>
@endsection