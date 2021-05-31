@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row "> <!--justify-content-center-->
            <div class="col-6">
                <h1 class="mt-3">Tambah Data</h1>
                <form method="POST" action="/index/rjs">
                    @csrf
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="form-group my-3">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Sertifikasi">
                    </div>
                    <div class="form-group my-3">
                        <label for="status_jenis_sertifikasi">Status Sertifikasi</label>
                        <input type="text" class="form-control" id="status_jenis_sertifikasi" name="status_jenis_sertifikasi" placeholder="Masukkan Status">
                    </div>
                    <!-- <div class="form-group my-3">
                        <label for="created_by">Creator</label>
                        <input type="text" class="form-control" id="created_by" name="created_by" placeholder="Masukkan Nama Anda">
                    </div>
                    <div class="form-group my-3">
                        <label for="edited_by">Editor</label>
                        <input type="text" class="form-control" id="edited_by" name="edited_by" placeholder="Masukkan Nama Anda">
                    </div> -->
                    <div class="form-group my-3">
                        <label for="is_aktif">Aktif</label>
                        <input type="text" class="form-control" id="is_aktif" name="is_aktif" placeholder="true / false">
                    </div>
                    <button type="submit" class="btn bg-primary">Tambah Data</button>
                    <a href="{{ url('/index/datarjs') }}" class="btn bg-warning my-3">Lihat Data</a>
                    <a href="{{ url('/index') }}" class="btn bg-success my-3">kembali ke halaman utama</a>
                </form>
            </div>
        </div>
    </div>
@endsection