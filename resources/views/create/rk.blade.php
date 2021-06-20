@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white; border-radius: 10px;">
        <div class="row "> <!--justify-content-center-->
            <div class="col-6">
                <h1 class="mt-3">Tambah Data</h1>
                <form method="POST" action="/index/rk">
                    @csrf
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="form-group my-3">
                        <label for="nama_kegiatan">nama kegiatan</label>
                        <input type="text" class="form-control @error('nama_kegiatan') is-invalid @enderror" id="nama_kegiatan" name="nama_kegiatan" placeholder="Masukkan nama kegiatan" value="{{old('nama_kegiatan')}}">
                        @error('nama_kegiatan') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="deskripsi">deskripsi</label>
                        <textarea type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" placeholder="Masukkan deskripsi kegiatan">{{old('deskripsi')}}</textarea>
                        @error('deskripsi') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <button type="submit" class="btn bg-primary my-3">Tambah Data</button>
                    <a href="{{ url('/index/datark') }}" class="btn bg-warning my-3 d-inline">Lihat Data</a>
                    <a href="{{ url('/index') }}" class="btn bg-success my-3 d-inline">kembali ke halaman utama</a>
                </form>
            </div>
        </div>
    </div>
@endsection