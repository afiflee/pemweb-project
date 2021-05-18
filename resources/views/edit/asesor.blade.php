@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row "> <!--justify-content-center-->
            <div class="col-6">
                <h1 class="mt-3">Ubah Data</h1>
                <form method="POST" action="/dataasesor/{{$asesor->id}}">
                    @csrf
                    @method('put')
                    <div class="form-group my-3">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" value="{{ $asesor->nama }}">
                    </div>
                    <div class="form-group my-3">
                        <label for="nim">nim</label>
                        <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan nim" value="{{ $asesor->nim }}">
                    </div>
                    <div class="form-group my-3">
                        <label for="nik">nik</label>
                        <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan nik" value="{{ $asesor->nik }}">
                    </div>
                    <div class="form-group my-3">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" value="{{ $asesor->tempat_lahir }}">
                    </div>
                    <div class="form-group my-3">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir" value="{{ $asesor->tanggal_lahir }}">
                    </div>
                    <div class="form-group my-3">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" placeholder="Laki-Laki/Perempuan" value="{{ $asesor->jenis_kelamin }}">
                    </div>
                    <div class="form-group my-3">
                        <label for="alamat">alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="masukkan alamat" value="{{ $asesor->alamat }}">
                    </div>
                    <div class="form-group my-3">
                        <label for="no_telpon">no telepon</label>
                        <input type="tel" class="form-control" id="no_telpon" name="no_telpon" placeholder="masukkan nomor telepon" value="{{ $asesor->no_telpon }}">
                    </div>
                    <div class="form-group my-3">
                        <label for="email">email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="masukkan email" value="{{ $asesor->email }}">
                    </div>
                    <button type="submit" class="btn bg-primary">Ubah Data</button>
                </form>
            </div>
        </div>
    </div>
@endsection