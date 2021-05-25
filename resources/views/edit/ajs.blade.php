@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row "> <!--justify-content-center-->
            <div class="col-6">
                <h1 class="mt-3">Ubah Data</h1>
                <form method="POST" action="/dataajs/{{$asesorjenissertifikasi->id}}">
                    @csrf
                    @method('put')
					<div class="form-group my-3">
                        <label for="id_asesor">id asesor</label>
                        <input type="number" class="form-control" id="id_asesor" name="id_asesor" placeholder="id asesor" value="{{$asesorjenissertifikasi->id_asesor}}">
                    </div>
                    <div class="form-group my-3">
                        <label for="id_ref_jenis_sertifikasi">id jenis sertifikasi</label>
                        <input type="number" class="form-control" id="id_ref_jenis_sertifikasi" name="id_ref_jenis_sertifikasi" placeholder="id jenis sertifikasi" value="{{$asesorjenissertifikasi->id_ref_jenis_sertifikasi}}">
                    </div>
                    <div class="form-group my-3">
                        <label for="tanggal_awal_berlaku">Tanggal awal berlaku</label>
                        <input type="date" class="form-control" id="tanggal_awal_berlaku" name="tanggal_awal_berlaku" placeholder="Tanggal awal berlaku"  value="{{$asesorjenissertifikasi->tanggal_awal_berlaku}}">
                    </div>
                    <div class="form-group my-3">
                        <label for="tanggal_akhir_berlaku">Tanggal akhir berlaku</label>
                        <input type="date" class="form-control" id="tanggal_akhir_berlaku" name="tanggal_akhir_berlaku" placeholder="Tanggal akhir berlaku"  value="{{$asesorjenissertifikasi->tanggal_akhir_berlaku}}">
                    </div>
                    <div class="form-group my-3">
                        <label for="no_sertifikat">nomor sertifikat</label>
                        <input type="number" class="form-control" id="no_sertifikat" name="no_sertifikat" placeholder="nomer sertifikat"  value="{{$asesorjenissertifikasi->no_sertifikat}}">
                    </div>
                    <button type="submit" class="btn bg-primary my-3">Ubah Data</button>
				</form>
            </div>
        </div>
    </div>
@endsection