@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white; border-radius: 10px;">
        <div class="row "> <!--justify-content-center-->
            <div class="col-6">
                <h1 class="mt-3">Ubah Data</h1>
                <form method="POST" action="/datap/{{$pendaftar->id}}">
                    @csrf
                    @method('put')
                    <div class="form-group my-3">
                        <label for="status_akhir_sertifikasi">status akhir sertifikasi</label>
                        <input type="text" class="form-control @error('status_akhir_sertifikasi') is-invalid @enderror" id="status_akhir_sertifikasi" name="status_akhir_sertifikasi" placeholder="Masukkan status akhir sertifikasi" value="{{$pendaftar->status_akhir_sertifikasi}}">
                        @error('status_akhir_sertifikasi') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="tanggal_status_akhir">Tanggal status akhir</label>
                        <input type="date" class="form-control @error('tanggal_status_akhir') is-invalid @enderror" id="tanggal_status_akhir" name="tanggal_status_akhir" placeholder="Tanggal status akhir" value="{{$pendaftar->tanggal_status_akhir}}"> 
                        @error('tanggal_status_akhir') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="status_pendaftaran">status pendaftaran</label>
                        <input type="text" class="form-control @error('status_pendaftaran') is-invalid @enderror" id="status_pendaftaran" name="status_pendaftaran" placeholder="status pendaftaran" value="{{$pendaftar->status_pendaftaran}}">
                        @error('status_pendaftaran') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <button type="submit" class="btn bg-primary my-3">Ubah Data</button>
				</form>
            </div>
        </div>
    </div>
@endsection