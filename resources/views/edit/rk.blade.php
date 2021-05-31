@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row "> <!--justify-content-center-->
            <div class="col-6">
                <h1 class="mt-3">Tambah Data</h1>
                <form method="POST" action="/datark/{{$refkegiatan->id}}">
                    @csrf
                    @method('put')
                    <div class="form-group my-3">
                        <label for="nama_kegiatan">nama kegiatan</label>
                        <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" placeholder="Masukkan nama kegiatan" value="{{$refkegiatan->nama_kegiatan}}">
                    </div>
                    <div class="form-group my-3">
                        <label for="deskripsi">deskripsi</label>
                        <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukkan deskripsi kegiatan">{{$refkegiatan->deskripsi}}</textarea>
                    </div>
                    <!-- <div class="form-group my-3">
                        <label for="created_by">Creator</label>
                        <input type="text" class="form-control" id="created_by" name="created_by" placeholder="Masukkan Nama Anda" value="{{$refkegiatan->created_by}}">
                    </div> -->
                    <button type="submit" class="btn bg-primary my-3">Ubah Data</button>
                </form>
            </div>
        </div>
    </div>
@endsection