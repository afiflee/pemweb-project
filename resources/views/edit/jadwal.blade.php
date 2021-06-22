@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white; border-radius: 10px;">
        <div class="row "> <!--justify-content-center-->
            <div class="col-6">
                <h1 class="mt-3">Tambah Data</h1>
                <form method="POST" action="/datajadwal/{{$jadwal->id}}">
                    @csrf
                   @method('put')
                   <div class="form-group my-3">
                        <label for="id_penawaran_sertifikasi">id penawaran</label>
                        <select class="form-control @error('id_penawaran_sertifikasi') is-invalid @enderror" id="id_penawaran_sertifikasi" name="id_penawaran_sertifikasi">
                            @foreach($penawaran as $penawaran)
                                <option value="{{$penawaran->id}}">{{$penawaran->deskripsi_penawaran}}</option>
                            @endforeach
                        </select>
                        @error('id_penawaran_sertifikasi') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="id_kegiatan">id kegiatan</label>
                        <select class="form-control @error('id_kegiatan') is-invalid @enderror" id="id_kegiatan" name="id_kegiatan">
                            @foreach($kegiatan as $kegiatan)
                                <option value="{{$kegiatan->id}}">{{$kegiatan->nama_kegiatan}}</option>
                            @endforeach
                        </select>
                        @error('id_kegiatan') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="tanggal_awal">Tanggal awal</label>
                        <input type="date" class="form-control @error('tanggal_awal') is-invalid @enderror" id="tanggal_awal" name="tanggal_awal" placeholder="Tanggal awal" value="{{$jadwal->tanggal_awal}}">
                        @error('tanggal_awal') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="tanggal_akhir">Tanggal akhir</label>
                        <input type="date" class="form-control @error('tanggal_akhir') is-invalid @enderror" id="tanggal_akhir" name="tanggal_akhir" placeholder="Tanggal akhir" value="{{$jadwal->tanggal_akhir}}">
                        @error('tanggal_akhir') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="is_show">show</label>
                        <select class="form-control @error('is_show') is-invalid @enderror" id="is_show" name="is_show">
                            <option value="1">Aktif</option>
                            <option value="0">Tidak Aktif</option>
                        </select>
                        @error('is_show') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="deskripsi">deskripsi</label>
                        <textarea type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" placeholder="Masukkan deskripsi kegiatan">{{$jadwal->deskripsi}}</textarea>
                        @error('deskripsi') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <button type="submit" class="btn bg-primary my-3" style="color: white">Ubah Data</button>
				</form>
            </div>
        </div>
    </div>
@endsection