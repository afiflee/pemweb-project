@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row "> <!--justify-content-center-->
            <div class="col-6">
                <h1 class="mt-3">Tambah Data</h1>
                <form method="POST" action="/index/p">
                    @csrf
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
					<div class="form-group my-3">
                        <label for="id_penawaran_sertifikasi">id penawaran sertifikasi</label>
                        <input type="number" class="form-control" id="id_penawaran_sertifikasi" name="id_penawaran_sertifikasi" placeholder="id penawaran sertifikasi">
                    </div>
                    <div class="form-group my-3">
                        <label for="id_asesi">id asesi</label>
                        <input type="number" class="form-control" id="id_asesi" name="id_asesi" placeholder="id asesi">
                    </div>
                    <div class="form-group my-3">
                        <label for="status_akhir_sertifikasi">status akhir sertifikasi</label>
                        <input type="text" class="form-control" id="status_akhir_sertifikasi" name="status_akhir_sertifikasi" placeholder="Masukkan status akhir sertifikasi">
                    </div>
                    <div class="form-group my-3">
                        <label for="tanggal_status_akhir">Tanggal status akhir</label>
                        <input type="date" class="form-control" id="tanggal_status_akhir" name="tanggal_status_akhir" placeholder="Tanggal status akhir">
                    </div>
                    <!-- <div class="form-group my-3">
                        <label for="created_by">Creator</label>
                        <input type="text" class="form-control" id="created_by" name="created_by" placeholder="Masukkan Nama Anda">
                    </div>
                    <div class="form-group my-3">
                        <label for="edited_by">Editor</label>
                        <input type="text" class="form-control" id="edited_by" name="edited_by" placeholder="Kosongkan bila pertama mengisi">
                    </div> -->
                    <div class="form-group my-3">
                        <label for="status_pendaftaran">status pendaftaran</label>
                        <input type="text" class="form-control" id="status_pendaftaran" name="status_pendaftaran" placeholder="status pendaftaran">
                    </div>
                    <button type="submit" class="btn bg-primary my-3">Tambah Data</button>
                    <a href="{{ url('/index/datap') }}" class="btn bg-warning my-3">Lihat Data</a>
					<a href="{{ url('/index') }}" class="btn bg-success my-3">kembali ke halaman utama</a>
				</form>
            </div>
        </div>
    </div>
@endsection