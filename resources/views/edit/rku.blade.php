@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row "> <!--justify-content-center-->
            <div class="col-6">
                <h1 class="mt-3">Ubah Data</h1>
                <form method="POST" action="/datarku/{{$refkuesioner->id}}">
                    @csrf
                    @method('put')
                    <div class="form-group my-3">
                        <label for="pertanyaan">pertanyaan</label>
                        <textarea type="text" class="form-control @error('pertanyaan') is-invalid @enderror" id="pertanyaan" name="pertanyaan" placeholder="Masukkan pertanyaan kegiatan">{{$refkuesioner->pertanyaan}}</textarea>
                        @error('pertanyaan') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="is_aktif">Aktif</label>
                        <input type="text" class="form-control @error('is_aktif') is-invalid @enderror" id="is_aktif" name="is_aktif" placeholder="true / false" value="{{$refkuesioner->is_aktif}}">
                        @error('is_aktif') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <button type="submit" class="btn bg-primary my-3">Ubah Data</button>
                </form>
            </div>
        </div>
    </div>
@endsection