@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white; border-radius: 10px;">
        <div class="row "> <!--justify-content-center-->
            <div class="col-6">
                <h1 class="mt-3">Tambah Data</h1>
                <hr>
                <form method="POST" action="/index/p">
                    @csrf
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
					<div class="form-group my-3">
                        <label for="id_penawaran_sertifikasi">id penawaran sertifikasi</label>
                        <select class="form-control @error('id_penawaran_sertifikasi') is-invalid @enderror" id="id_penawaran_sertifikasi" name="id_penawaran_sertifikasi">
                            @foreach($penawaran as $penawaran)
                                <option value="{{$penawaran->id}}">{{$penawaran->id}}</option>
                            @endforeach
                        </select>
                        @error('id_penawaran_sertifikasi') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="status_akhir_sertifikasi">status akhir sertifikasi</label>
                        <input type="text" class="form-control @error('status_akhir_sertifikasi') is-invalid @enderror" id="status_akhir_sertifikasi" name="status_akhir_sertifikasi" placeholder="Masukkan status akhir sertifikasi" value="{{old('status_akhir_sertifikasi')}}">
                        @error('status_akhir_sertifikasi') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="tanggal_status_akhir">Tanggal status akhir</label>
                        <input type="date" class="form-control @error('tanggal_status_akhir') is-invalid @enderror" id="tanggal_status_akhir" name="tanggal_status_akhir" placeholder="Tanggal status akhir" value="{{old('tanggal_status_akhir')}}">
                        @error('tanggal_status_akhir') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="status_pendaftaran">status pendaftaran</label>
                        <input type="text" class="form-control @error('status_pendaftaran') is-invalid @enderror" id="status_pendaftaran" name="status_pendaftaran" placeholder="status pendaftaran" value="{{old('status_pendaftaran')}}">
                        @error('status_pendaftaran') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <button type="submit" class="btn bg-primary my-3" style="color: white">Tambah Data</button>
                    <a href="{{ url('/index/datap') }}" class="btn bg-warning my-3" style="color: white">Lihat Data</a>
					<a href="{{ url('/home') }}" class="btn bg-success my-3" style="color: white">Kembali ke Homepage</a>
				</form>
            </div>
        </div>
    </div>
@endsection
