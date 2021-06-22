@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white; border-radius: 10px;">
        <div class="row "> <!--justify-content-center-->
            <div class="col-12">
                <h1 class="mt-3">Tambah Penawaran Sertifikasi</h1>
                <hr>
                <form method="POST" action="/index/ps">
                    @csrf
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="form-group my-3">
                        <label for="id_ref_jenis_sertifikasi">ID Jenis Sertifikasi</label>
                        <select class="form-control @error('id_ref_jenis_sertifikasi') is-invalid @enderror" id="id_ref_jenis_sertifikasi" name="id_ref_jenis_sertifikasi">
                            @foreach($jenis as $jenis)
                                <option value="{{$jenis->id}}">{{$jenis->nama}}</option>
                            @endforeach
                        </select>
                        @error('id_ref_jenis_sertifikasi') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="deskripsi_penawaran">Deskripsi Penawaran</label>
                        <textarea type="text" class="form-control @error('deskripsi_penawaran') is-invalid @enderror" id="deskripsi_penawaran" name="deskripsi_penawaran" placeholder="masukkan deskripsi penawaran">{{old('deskripsi_penawaran')}}</textarea>
                        @error('deskripsi_penawaran') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="periode">Periode</label>
                        <input type="number" class="form-control @error('periode') is-invalid @enderror" id="periode" name="periode" placeholder="masukkan periode" pattern="[0-9]{4}" value="{{old('periode')}}">
                        @error('periode') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <button type="submit" class="btn bg-primary my-3" style="color: white">Tambah Data</button>
                    <a href="{{ url('/index/dataps') }}" class="btn bg-warning my-3" style="color: white">Lihat Data</a>
                    <a href="{{ url('/home') }}" class="btn bg-success my-3" style="color: white">Kembali ke Homepage</a>
                </form>
            </div>
        </div>
    </div>
@endsection
