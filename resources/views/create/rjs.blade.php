@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white; border-radius: 10px;">
        <div class="row "> <!--justify-content-center-->
            <div class="col-6">
                <h1 class="mt-3">Tambah Data</h1>
                <form method="POST" action="/index/rjs">
                    @csrf
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="form-group my-3">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Masukkan Nama Sertifikasi" value="{{old('nama')}}">
                        @error('nama') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="status_jenis_sertifikasi">Status Sertifikasi</label>
                        <input type="text" class="form-control @error('status_jenis_sertifikasi') is-invalid @enderror" id="status_jenis_sertifikasi" name="status_jenis_sertifikasi" placeholder="Masukkan Status" value="{{old('status_jenis_sertifikasi')}}">
                        @error('status_jenis_sertifikasi') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <button type="submit" class="btn bg-primary">Tambah Data</button>
                    <a href="{{ url('/index/datarjs') }}" class="btn bg-warning my-3">Lihat Data</a>
                    <a href="{{ url('/index') }}" class="btn bg-success my-3">kembali ke halaman utama</a>
                </form>
            </div>
        </div>
    </div>
@endsection