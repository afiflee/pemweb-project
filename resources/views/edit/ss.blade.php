@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row "> <!--justify-content-center-->
            <div class="col-6">
                <h1 class="mt-3">Ubah Data</h1>
                <form method="POST" action="/datass/{{$syaratsertifikasi->id}}">
                    @csrf
                    @method('put')
                    <div class="form-group my-3">
                        <label for="id_ref_jenis_sertifikasi">id jenis sertifikasi</label>
                        <input type="number" class="form-control" id="id_ref_jenis_sertifikasi" name="id_ref_jenis_sertifikasi" placeholder="id jenis sertifikasi" value="{{ $syaratsertifikasi ->  id_ref_jenis_sertifikasi}}">
                    </div>
                    <div class="form-group my-3">
                        <label for="syarat">nomor syarat</label>
                        <input type="number" class="form-control" id="syarat" name="syarat" placeholder="nomor syarat" value="{{ $syaratsertifikasi -> syarat}}">
                    </div>
                    <div class="form-group my-3">
                        <label for="is_aktif">Aktif</label>
                        <input type="text" class="form-control" id="is_aktif" name="is_aktif" placeholder="true / false" value="{{ $syaratsertifikasi -> is_aktif}}">
                    </div>
                    <button type="submit" class="btn bg-primary my-3">Ubah Data</button>
                </form>
            </div>
        </div>
    </div>
@endsection