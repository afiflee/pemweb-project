@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white; border-radius: 10px;">
        <div class="row" style="overflow-x:auto;">
            <div class="col">
            <h1>Ref Jenis Sertifikasi</h1>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
             @endif

            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Status</th>
                        {{-- <th scope="col">Created By</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Updated By</th>
                        <th scope="col">Updated At</th> --}}
                        <th scope="col">Aktif</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($rjs as $rjs)
                    <tr>
                        <th scope="row">{{$loop -> iteration}}</th>
                        <td>{{$rjs -> nama}}</td>
                        <td>{{$rjs -> status_jenis_sertifikasi}}</td>
                        {{-- <td>{{$rjs -> created_by}}</td>
                        <td>{{$rjs -> created_at}}</td>
                        <td>{{$rjs -> edited_by}}</td>
                        <td>{{$rjs -> updated_at}}</td> --}}
                        <td>
                        <!-- {{$rjs -> is_aktif}} -->
                        @if ($rjs -> is_aktif == 1)
                        Aktif
                        @else
                        Tidak Aktif
                        @endif
                        </td>
                        <td>
                        <a href="/datarjs/{{$rjs->id}}/edit" class="btn bg-primary">Edit</a>
                        <form action="/datarjs/{{$rjs->id}}" method="POST" class="d-inline">
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
                <a href="{{ url('/index/rjs') }}" class="btn bg-primary my-3">Tambah Data</a>
                @endhasrole
                <a href="{{ url('/home') }}" class="btn bg-success my-3">Kembali ke Homepage</a>
        </div>
    </div>
@endsection
