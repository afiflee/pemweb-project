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
                        <input type="number" class="form-control @error('id_ref_jenis_sertifikasi') is-invalid @enderror" id="id_ref_jenis_sertifikasi" name="id_ref_jenis_sertifikasi" placeholder="id ref jenis sertifikasi" value="{{ $penawaransertifikasi ->  id_ref_jenis_sertifikasi}}">
                        @error('id_ref_jenis_sertifikasi') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="deskripsi_penawaran">deskripsi penawaran</label>
                        <input type="text" class="form-control @error('deskripsi_penawaran') is-invalid @enderror" id="deskripsi_penawaran" name="deskripsi_penawaran" placeholder="Masukkan deskripsi penawaran" value="{{ $penawaransertifikasi -> deskripsi_penawaran}}">
                        @error('deskripsi_penawaran') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="periode">periode</label>
                        <input type="number" class="form-control @error('periode') is-invalid @enderror" id="periode" name="periode" placeholder="Masukkan periode" pattern="[0-9]{4}" value="{{ $penawaransertifikasi -> periode}}">
                        @error('periode') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="is_aktif">Aktif</label>
                        <input type="text" class="form-control @error('is_aktif') is-invalid @enderror" id="is_aktif" name="is_aktif" placeholder="true / false" value="{{ $penawaransertifikasi->is_aktif }}">
                        @error('is_aktif') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <button type="submit" class="btn bg-primary my-3">Ubah Data</button>
                </form>
            </div>
        </div>
    </div>
@endsection