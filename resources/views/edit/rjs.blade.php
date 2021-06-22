@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white; border-radius: 10px;">
        <div class="row "> <!--justify-content-center-->
            <div class="col-6">
                <h1 class="mt-3">Ubah Data</h1>
                <form method="POST" action="/datarjs/{{$refjenissertifikasi->id}}">
                    @method('put')
                    @csrf
                    <div class="form-group my-3">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Masukkan Nama Sertifikasi" value="{{$refjenissertifikasi->nama}}">
                        @error('nama') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="status_jenis_sertifikasi">Status Sertifikasi</label>
                        <input type="text" class="form-control @error('status_jenis_sertifikasi') is-invalid @enderror" id="status_jenis_sertifikasi" name="status_jenis_sertifikasi" placeholder="Masukkan Status" value="{{$refjenissertifikasi->status_jenis_sertifikasi}}">
                        @error('status_jenis_sertifikasi') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="is_active">Status aktif</label>
                        <select class="form-control @error('is_aktif') is-invalid @enderror" name="is_aktif" id="is_aktif" >
                            <option value="1">Aktif</option>
                            <option value="0">Tidak Aktif</option>
                        </select>
                    </div>
                    <button type="submit" class="btn bg-primary" style="color: white">Ubah Data</button>
                </form>
            </div>
        </div>
    </div>
@endsection