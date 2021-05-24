@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row "> <!--justify-content-center-->
            <div class="col-6">
                <h1 class="mt-3">Ubah Data</h1>
                <form method="POST" action="/dataiak/{{$instrumenasesmenkompetensi->id}}">
                    @csrf
                    @method('put')
                    <div class="form-group my-3">
                        <label for="id_ref_unit_kompetensi">id ref unit kompetensi</label>
                        <input type="number" class="form-control" id="id_ref_unit_kompetensi" name="id_ref_unit_kompetensi" placeholder="id ref unit kompetensi" value="{{ $instrumenasesmenkompetensi ->  id_ref_unit_kompetensi}}">
                    </div>
                    <div class="form-group my-3">
                        <label for="instrumen_pertanyaan">instrumen pertanyaan</label>
                        <input type="number" class="form-control" id="instrumen_pertanyaan" name="instrumen_pertanyaan" placeholder="Masukkan instrumen pertanyaan" value="{{ $instrumenasesmenkompetensi -> instrumen_pertanyaan}}">
                    </div>
                    <div class="form-group my-3">
                        <label for="status_instrumen">status instrumen</label>
                        <input type="text" class="form-control" id="status_instrumen" name="status_instrumen" placeholder="Masukkan status instrumen" value="{{ $instrumenasesmenkompetensi -> status_instrumen}}">
                    </div>
                    <div class="form-group my-3">
                        <label for="is_aktif">Aktif</label>
                        <input type="text" class="form-control" id="is_aktif" name="is_aktif" placeholder="true / false" value="{{ $instrumenasesmenkompetensi->is_aktif }}">
                    </div>
                    <button type="submit" class="btn bg-primary my-3">Ubah Data</button>
                </form>
            </div>
        </div>
    </div>
@endsection