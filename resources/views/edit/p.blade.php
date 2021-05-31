@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row "> <!--justify-content-center-->
            <div class="col-6">
                <h1 class="mt-3">Ubah Data</h1>
                <form method="POST" action="/datap/{{$pendaftar->id}}">
                    @csrf
                    @method('put')
					<div class="form-group my-3">
                        <label for="id_penawaran_sertifikasi">id penawaran sertifikasi</label>
                        <input type="number" class="form-control" id="id_penawaran_sertifikasi" name="id_penawaran_sertifikasi" placeholder="id penawaran sertifikasi" value="{{$pendaftar->id_penawaran_sertifikasi}}">
                    </div>
                    <div class="form-group my-3">
                        <label for="id_asesi">id asesi</label>
                        <input type="number" class="form-control" id="id_asesi" name="id_asesi" placeholder="id asesi" value="{{$pendaftar->id_asesi}}">
                    </div>
                    <div class="form-group my-3">
                        <label for="status_akhir_sertifikasi">status akhir sertifikasi</label>
                        <input type="text" class="form-control" id="status_akhir_sertifikasi" name="status_akhir_sertifikasi" placeholder="Masukkan status akhir sertifikasi" value="{{$pendaftar->status_akhir_sertifikasi}}">
                    </div>
                    <div class="form-group my-3">
                        <label for="tanggal_status_akhir">Tanggal status akhir</label>
                        <input type="date" class="form-control" id="tanggal_status_akhir" name="tanggal_status_akhir" placeholder="Tanggal status akhir" value="{{$pendaftar->tanggal_status_akhir}}"> 
                    </div>
                    <div class="form-group my-3">
                        <label for="status_pendaftaran">status pendaftaran</label>
                        <input type="text" class="form-control" id="status_pendaftaran" name="status_pendaftaran" placeholder="status pendaftaran" value="{{$pendaftar->status_pendaftaran}}">
                    </div>
                    <button type="submit" class="btn bg-primary my-3">Ubah Data</button>
				</form>
            </div>
        </div>
    </div>
@endsection