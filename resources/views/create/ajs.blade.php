@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row "> <!--justify-content-center-->
            <div class="col-6">
                <h1 class="mt-3">Tambah Data</h1>
                <form method="POST" action="/index/ajs">
                    @csrf
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
					<div class="form-group my-3">
                        <label for="id_asesor">id asesor</label>
                        <input type="number" class="form-control" id="id_asesor" name="id_asesor" placeholder="id asesor">
                    </div>
                    <div class="form-group my-3">
                        <label for="id_ref_jenis_sertifikasi">id jenis sertifikasi</label>
                        <input type="number" class="form-control" id="id_ref_jenis_sertifikasi" name="id_ref_jenis_sertifikasi" placeholder="id jenis sertifikasi">
                    </div>
                    <div class="form-group my-3">
                        <label for="tanggal_awal_berlaku">Tanggal awal berlaku</label>
                        <input type="date" class="form-control" id="tanggal_awal_berlaku" name="tanggal_awal_berlaku" placeholder="Tanggal awal berlaku">
                    </div>
                    <div class="form-group my-3">
                        <label for="tanggal_akhir_berlaku">Tanggal akhir berlaku</label>
                        <input type="date" class="form-control" id="tanggal_akhir_berlaku" name="tanggal_akhir_berlaku" placeholder="Tanggal akhir berlaku">
                    </div>
                    <div class="form-group my-3">
                        <label for="nomor_sertifikat">nomor sertifikat</label>
                        <input type="number" class="form-control" id="nomor_sertifikat" name="nomor_sertifikat" placeholder="nomor sertifikat">
                    </div>
                    <button type="submit" class="btn bg-primary my-3">Tambah Data</button>
					<a href="{{ url('/index') }}" class="btn bg-success my-3">kembali ke halaman utama</a>
				</form>
            </div>
        </div>
    </div>
@endsection