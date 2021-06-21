@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white; border-radius: 10px;">
        <div class="row">
            <div class="col">
            <h1>Syarat yang sudah anda isi</h1>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
             @endif

            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">syarat</th>
                        <th scope="col">path_bukti</th>
                        <th scope="col">status verifikasi</th>
                        <th scope="col">verifikasi asesor</th>
                        <th scope="col">komentar asesor</th>
                        <th scope="col">Hapus Syarat</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($syaratanda as $syaratanda)
                    <tr>
                        <th scope="row">{{$loop -> iteration}}</th>
                        <td>{{$syaratanda -> syarat}}</td>
                        <td>{{$syaratanda -> path_bukti}}</td>
                        <td>{{$syaratanda -> status_verifikasi_syarat}}</td>
                        <td>{{$syaratanda -> verifikasi_asesor}}</td>
                        <td>{{$syaratanda -> komentar_asesor}}</td>
                        <td>
                        <form action="/datapsy/{{$syaratanda->id}}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn bg-danger">Delete</button>
                        </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
                <a href="{{ url('/index/psy') }}" class="btn bg-primary my-3">Isi berkas</a>
                <a href="{{ url('/home') }}" class="btn bg-success my-3">Kembali ke Homepage</a>

    </div>
@endsection