@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white; border-radius: 10px;">
        <div class="row "> <!--justify-content-center-->
            <div class="col-6">
                <h1 class="mt-3">Tambah Data</h1>
                <form method="POST" action="/index/ap">
                    @csrf
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
					<div class="form-group my-3">
                        <label for="id_asesor_jenis_sertifikasi">id asesor jenis sertifikasi</label>
                        <select class="form-control @error('id_asesor_jenis_sertifikasi') is-invalid @enderror" id="id_asesor_jenis_sertifikasi" name="id_asesor_jenis_sertifikasi">
                            @foreach($asesorjenis as $asesorjenis)
                                <option value="{{$asesorjenis->id}}">{{$asesorjenis->no_sertifikat}}</option>
                            @endforeach
                        </select>
                        @error('id_asesor_jenis_sertifikasi') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="id_pendaftar">id pendaftar</label>
                        <select class="form-control @error('id_pendaftar') is-invalid @enderror" id="id_pendaftar" name="id_pendaftar">
                            @foreach($pendaftar as $pendaftar)
                                <option value="{{$pendaftar->id}}">{{$pendaftar->id}}</option>
                            @endforeach
                        </select>
                        @error('id_pendaftar') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
					<div class="form-group my-3">
                        <label for="hasil">hasil</label>
                        <input type="text" class="form-control @error('hasil') is-invalid @enderror" id="hasil" name="hasil" placeholder="masukkan hasil" value="{{old('hasil')}}">
                        @error('hasil') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <button type="submit" class="btn bg-primary my-3">Tambah Data</button>
                    <a href="{{ url('/index/dataap') }}" class="btn bg-warning my-3">Lihat Data</a>
                    <a href="{{ url('/index') }}" class="btn bg-danger my-3">kembali ke halaman tabel</a>
					<a href="{{ url('/home') }}" class="btn bg-success my-3">kembali ke halaman utama</a>
				</form>
            </div>
        </div>
    </div>
@endsection