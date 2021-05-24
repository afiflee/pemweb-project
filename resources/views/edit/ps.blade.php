@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row "> <!--justify-content-center-->
            <div class="col-6">
                <h1 class="mt-3">Ubah Data</h1>
                <form method="POST" action="/dataps/{{$penawaransertifikasi->id}}">
                    @csrf
                    @method('put')
                    <div class="form-group my-3">
                        <label for="id_ref_jenis_sertifikasi">id ref jenis sertifikasi</label>
                        <input type="number" class="form-control" id="id_ref_jenis_sertifikasi" name="id_ref_unit_kompetensi" placeholder="id ref jenis sertifikasi" value="{{ $penawaransertifikasi ->  id_ref_jenis_sertifikasi}}">
                    </div>
                    <div class="form-group my-3">
                        <label for="deskripsi_penawaran">deskripsi penawaran</label>
                        <input type="text" class="form-control" id="deskripsi_penawaran" name="deskripsi_penawaran" placeholder="Masukkan deskripsi penawaran" value="{{ $penawaransertifikasi -> deskripsi_penawaran}}">
                    </div>
                    <div class="form-group my-3">
                        <label for="periode">periode</label>
                        <input type="number" class="form-control" id="periode" name="periode" placeholder="Masukkan periode" pattern="[0-9]{4}" value="{{ $penawaransertifikasi -> periode}}">
                    </div>
                    <div class="form-group my-3">
                        <label for="created_by">Creator</label>
                        <input type="text" class="form-control" id="created_by" name="created_by" placeholder="Masukkan Nama Anda" value="{{ $penawaransertifikasi -> created_by}}">
                    </div>
                    <div class="form-group my-3">
                        <label for="edited_by">Editor</label>
                        <input type="text" class="form-control" id="edited_by" name="edited_by" placeholder="Masukkan Nama Anda" value="{{ $penawaransertifikasi -> edited_by}}">
                    </div>
                    <div class="form-group my-3">
                        <label for="is_aktif">Aktif</label>
                        <input type="text" class="form-control" id="is_aktif" name="is_aktif" placeholder="true / false" value="{{ $penawaransertifikasi->is_aktif }}">
                    </div>
                    <button type="submit" class="btn bg-primary my-3">Ubah Data</button>
                </form>
            </div>
        </div>
    </div>
@endsection