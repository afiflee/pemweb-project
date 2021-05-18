@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row "> <!--justify-content-center-->
            <div class="col-6">
                <h1 class="mt-3">Ubah Data</h1>
                <form method="POST" action="/datarjs/{{$refjenissertifikasi->id}}">
                    @method('put')
                    @csrf
                    <div class="form-group my-3">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Sertifikasi" value="{{ $refjenissertifikasi->nama }}">
                    </div>
                    <div class="form-group my-3">
                        <label for="status_jenis_sertifikasi">Status Sertifikasi</label>
                        <input type="text" class="form-control" id="status_jenis_sertifikasi" name="status_jenis_sertifikasi" placeholder="Masukkan Status" value="{{ $refjenissertifikasi->status_jenis_sertifikasi}}">
                    </div>
                    <div class="form-group my-3">
                        <label for="created_by">Creator</label>
                        <input type="text" class="form-control" id="created_by" name="created_by" placeholder="Masukkan Nama Anda" value="{{ $refjenissertifikasi->created_by }}">
                    </div>
                    <div class="form-group my-3">
                        <label for="edited_by">Editor</label>
                        <input type="text" class="form-control" id="edited_by" name="edited_by" placeholder="Masukkan Nama Anda" value="{{ $refjenissertifikasi->edited_by }}">
                    </div>
                    <div class="form-group my-3">
                        <label for="is_aktif">Aktif</label>
                        <input type="text" class="form-control" id="is_aktif" name="is_aktif" placeholder="true / false" value="{{ $refjenissertifikasi->is_aktif }}">
                    </div>
                    <button type="submit" class="btn bg-primary">Ubah Data</button>
                </form>
            </div>
        </div>
    </div>
@endsection