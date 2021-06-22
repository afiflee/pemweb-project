@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white; border-radius: 10px;">
        <div class="row "> <!--justify-content-center-->
            <div class="col-12">
                <h1 class="mt-3">Tambah Asesor Jenis Sertifikasi</h1>
                <hr>
                <form method="POST" action="/index/ajs">
                    @csrf
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
					<div class="form-group my-3">
                        <label for="id_asesor">ID Asesor</label>
                        <select class="form-control @error('id_asesor') is-invalid @enderror" id="id_asesor" name="id_asesor">
                            @foreach($asesor as $asesor)
                                <option value="{{$asesor->id}}">{{$asesor->nama}}</option>
                            @endforeach
                        </select>
                        @error('id_asesor') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="id_ref_jenis_sertifikasi">ID Ref Jenis Sertifikasi</label>
                        <select class="form-control @error('id_ref_jenis_sertifikasi') is-invalid @enderror" id="id_ref_jenis_sertifikasi" name="id_ref_jenis_sertifikasi">
                            @foreach($jenis as $jenis)
                                <option value="{{$jenis->id}}">{{$jenis->nama}}</option>
                            @endforeach
                        </select>
                        @error('id_ref_jenis_sertifikasi') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="tanggal_awal_berlaku">Tanggal Berlaku</label>
                        <input type="date" class="form-control @error('tanggal_awal_berlaku') is-invalid @enderror" id="tanggal_awal_berlaku" name="tanggal_awal_berlaku" placeholder="Tanggal awal berlaku" value="{{old('tanggal_awal_berlaku')}}">
                        @error('tanggal_awal_berlaku') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="tanggal_akhir_berlaku">Tanggal Kadaluwarsa</label>
                        <input type="date" class="form-control @error('tanggal_akhir_berlaku') is-invalid @enderror" id="tanggal_akhir_berlaku" name="tanggal_akhir_berlaku" placeholder="Tanggal akhir berlaku" value="{{old('tanggal_akhir_berlaku')}}">
                        @error('tanggal_akhir_berlaku') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="no_sertifikat">Nomor Sertifikat</label>
                        <input type="number" class="form-control @error('no_sertifikat') is-invalid @enderror" id="no_sertifikat" name="no_sertifikat" placeholder="masukkan no sertifikat" value="{{old('no_sertifikat')}}">
                        @error('no_sertifikat') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <button type="submit" class="btn bg-primary my-3" style="color: white">Tambah Data</button>
                    <a href="{{ url('/index/dataajs') }}" class="btn bg-warning my-3" style="color: white">Lihat Data</a>
					<a href="{{ url('/home') }}" class="btn bg-success my-3" style="color: white">Kembali ke Homepage</a>
				</form>
            </div>
        </div>
    </div>
@endsection
