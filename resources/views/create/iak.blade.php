@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white; border-radius: 10px;">
        <div class="row "> <!--justify-content-center-->
            <div class="col-6">
                <h1 class="mt-3">Tambah Data</h1>
                <hr>
                <form method="POST" action="/index/iak">
                    @csrf
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="form-group my-3">
                        <label for="id_ref_unit_kompetensi">nomor id unit komptensi</label>
                        <select class="form-control @error('id_ref_unit_kompetensi') is-invalid @enderror" id="id_ref_unit_kompetensi" name="id_ref_unit_kompetensi">
                            @foreach($unit as $unit)
                                <option value="{{$unit->id}}">{{$unit->nama}}</option>
                            @endforeach
                        </select>
                        @error('id_ref_unit_kompetensi') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="instrumen_pertanyaan">instrumen pertanyaan</label>
                        <input type="text" class="form-control @error('instrumen_pertanyaan') is-invalid @enderror" id="instrumen_pertanyaan" name="instrumen_pertanyaan" placeholder="masukkan instrumen pertanyaan" value="{{old('instrumen_pertanyaan')}}">
                        @error('instrumen_pertanyaan') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="status_instrumen">status instrumen</label>
                        <input type="text" class="form-control @error('status_instrumen') is-invalid @enderror" id="status_instrumen" name="status_instrumen" placeholder="masukkan status instrumen" value="{{old('status_instrumen')}}">
                        @error('status_instrumen') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <button type="submit" class="btn bg-primary my-3" style="color: white">Tambah Data</button>
                    @hasrole('admin')
                    <a href="{{ url('/index/dataiak') }}" class="btn bg-warning my-3" style="color: white">Lihat Data</a>
                    @endhasrole
                    <a href="{{ url('/home') }}" class="btn bg-success my-3" style="color: white">Kembali ke Homepage</a>
                </form>
            </div>
        </div>
    </div>
@endsection
