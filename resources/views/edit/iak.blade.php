@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white; border-radius: 10px;">
        <div class="row "> <!--justify-content-center-->
            <div class="col-6">
                <h1 class="mt-3">Ubah Data</h1>
                <form method="POST" action="/dataiak/{{$instrumenasesmenkompetensi->id}}">
                    @csrf
                    @method('put')
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
                        <input type="text" class="form-control @error('instrumen_pertanyaan') is-invalid @enderror" id="instrumen_pertanyaan" name="instrumen_pertanyaan" placeholder="Masukkan instrumen pertanyaan" value="{{ $instrumenasesmenkompetensi -> instrumen_pertanyaan}}">
                        @error('instrumen_pertanyaan') <div class="invalid-feedback"> {{$message}} </div> @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="status_instrumen">status instrumen</label>
                        <input type="text" class="form-control @error('status_instrumen') is-invalid @enderror" id="status_instrumen" name="status_instrumen" placeholder="Masukkan status instrumen" value="{{ $instrumenasesmenkompetensi -> status_instrumen}}">
                        @error('status_instrumen') <div class="invalid-feedback"> {{$message}} </div> @enderror
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