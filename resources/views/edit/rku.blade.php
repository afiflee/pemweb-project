@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white; border-radius: 10px;">
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
                        <label for="is_active">Status aktif</label>
                        <select class="form-control @error('is_aktif') is-invalid @enderror" name="is_aktif" id="is_aktif" >
                            <option value="1">Aktif</option>
                            <option value="0">Tidak Aktif</option>
                        </select>
                    </div>
                    <button type="submit" class="btn bg-primary my-3" style="color: white">Ubah Data</button>
                </form>
            </div>
        </div>
    </div>
@endsection