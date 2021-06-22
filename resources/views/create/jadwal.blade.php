@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white; border-radius: 10px;">
        <div class="row "> <!--justify-content-center-->
            <div class="col-12">
                <h1 class="mt-3">Tambah Jadwal</h1>
                <hr>
                <form method="POST" action="/index/jadwal">
                    @csrf
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
					<div class="form-group my-3">
                        <label for="id_penawaran_sertifikasi">ID Penawaran Sertifikasi</label>
                        <select class="form-control @error('id_penawaran_sertifikasi') is-invalid @enderror" id="id_penawaran_sertifikasi" name="id_penawaran_sertifikasi">
                            @foreach($penawaran as $penawaran)
                                <option value="{{$penawaran->id}}">{{$penawaran->deskripsi_penawaran}}</option>
                            @endforeach
                        </select>
                        @error('id_penawaran_sertifikasi') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="id_kegiatan">ID Kegiatan</label>
                        <select class="form-control @error('id_kegiatan') is-invalid @enderror" id="id_kegiatan" name="id_kegiatan">
                            @foreach($kegiatan as $kegiatan)
                                <option value="{{$kegiatan->id}}">{{$kegiatan->nama_kegiatan}}</option>
                            @endforeach
                        </select>
                        @error('id_kegiatan') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="tanggal_awal">Tanggal Mulai</label>
                        <input type="date" class="form-control @error('tanggal_awal') is-invalid @enderror" id="tanggal_awal" name="tanggal_awal" placeholder="Tanggal awal" value="{{old('tanggal_awal')}}">
                        @error('tanggal_awal') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="tanggal_akhir">Tanggal Selesai</label>
                        <input type="date" class="form-control @error('tanggal_akhir') is-invalid @enderror" id="tanggal_akhir" name="tanggal_akhir" placeholder="Tanggal akhir" value="{{old('tanggal_akhir')}}">
                        @error('tanggal_akhir') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" placeholder="Masukkan deskripsi kegiatan"> {{old('deskripsi')}}</textarea>
                        @error('deskripsi') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <button type="submit" class="btn bg-primary my-3" style="color: white">Tambah Data</button>
                    <a href="{{ url('/index/datajadwal') }}" class="btn bg-warning my-3" style="color: white">Lihat Data</a>
					<a href="{{ url('/home') }}" class="btn bg-success my-3" style="color: white">Kembali ke Homepage</a>
				</form>
            </div>
        </div>
    </div>
@endsection
