@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white; border-radius: 10px;">
        <div class="row "> <!--justify-content-center-->
            <div class="col-12">
                <h1 class="mt-3">Tambah Pendaftar Syarat</h1>
                <hr>
                <form method="POST" action="/index/psy">
                    @csrf
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
					<div class="form-group my-3">
                        <label for="id_syarat_sertifikasi">ID Syarat Sertifikasi</label>
                        <select class="form-control @error('id_syarat_sertifikasi') is-invalid @enderror" id="id_syarat_sertifikasi" name="id_syarat_sertifikasi">
                            @foreach($syarat as $syarat)
                                <option value="{{$syarat->id}}">{{$syarat->syarat}}</option>
                            @endforeach
                        </select>
                        @error('id_syarat_sertifikasi') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="status_verifikasi_syarat">Status Verifikasi Syarat</label>
                        <input type="text" class="form-control @error('status_verifikasi_syarat') is-invalid @enderror" id="status_verifikasi_syarat" name="status_verifikasi_syarat" placeholder="masukkan status verifikasi" value="{{old('status_verifikasi_syarat')}}">
                        @error('status_verifikasi_syarat') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="path_bukti">Path Bukti</label>
                        <input type="text" class="form-control @error('path_bukti') is-invalid @enderror" id="path_bukti" name="path_bukti" placeholder="masukkan path bukti" value="{{old('path_bukti')}}">
                        @error('path_bukti') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <button type="submit" class="btn bg-primary my-3" style="color: white">Tambah Data</button>
                    <a href="{{ url('/index/datapsy') }}" class="btn bg-warning my-3" style="color: white">Lihat Data</a>
					<a href="{{ url('/home') }}" class="btn bg-success my-3" style="color: white">Kembali ke Homepage</a>
				</form>
            </div>
        </div>
    </div>
@endsection
