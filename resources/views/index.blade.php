@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row "> <!--justify-content-center-->
            <div class="col-6">
                <h1 class="mt-3">Lembaga Sertifikasi</h1>
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Nama Tabel</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="fs-5">ref_jenis_sertifikasi</td>
                            <td>
                            <a href="{{ url('/index/rjs') }}" class="badge bg-primary">Tambah</a>
                            <a href="{{ url('/index/datarjs') }}" class="badge bg-success">list</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="fs-5">asesor</td>
                            <td>
                            <a href="{{ url('/index/asesor') }}" class="badge bg-primary">Tambah</a>
                            <a href="{{ url('/index/dataasesor') }}" class="badge bg-success">list</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="fs-5">ref_unit_kompetensi</td>
                            <td>
                            <a href="{{ url('/index/ruk') }}" class="badge bg-primary">Tambah</a>
                            <a href="{{ url('/index/dataruk') }}" class="badge bg-success">list</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="fs-5">asesi</td>
                            <td>
                            <a href="{{ url('/index/asesi') }}" class="badge bg-primary">Tambah</a>
                            <a href="{{ url('/index/dataasesi') }}" class="badge bg-success">list</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="fs-5">ref_kegiatan</td>
                            <td>
                            <a href="{{ url('/index/rk') }}" class="badge bg-primary">Tambah</a>
                            <a href="{{ url('/index/datark') }}" class="badge bg-success">list</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="fs-5">ref_kuesioner</td>
                            <td>
                            <a href="{{ url('/index/rku') }}" class="badge bg-primary">Tambah</a>
                            <a href="{{ url('/index/datarku') }}" class="badge bg-success">list</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="fs-5">unit_kompetensi_sertifikasi</td>
                            <td>
                            <a href="{{ url('/index/uksertif') }}" class="badge bg-primary">Tambah</a>
                            <a href="{{ url('/index/datauksertif') }}" class="badge bg-success">list</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="fs-5">syarat_sertifikasi</td>
                            <td>
                            <a href="{{ url('/index/ss') }}" class="badge bg-primary">Tambah</a>
                            <a href="{{ url('/index/datass') }}" class="badge bg-success">list</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="fs-5">instrumen_asesmen_kompetensi</td>
                            <td>
                            <a href="{{ url('/index/iak') }}" class="badge bg-primary">Tambah</a>
                            <a href="{{ url('/index/dataiak') }}" class="badge bg-success">list</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="fs-5">penawaran_sertifikasi</td>
                            <td>
                            <a href="{{ url('/index/ps') }}" class="badge bg-primary">Tambah</a>
                            <a href="{{ url('/index/dataps') }}" class="badge bg-success">list</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="fs-5">pendaftar</td>
                            <td>
                            <a href="{{ url('/index/p') }}" class="badge bg-primary">Tambah</a>
                            <a href="{{ url('/index/datap') }}" class="badge bg-success">list</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="fs-5">pendaftar_syarat</td>
                            <td>
                            <a href="{{ url('/index/psy') }}" class="badge bg-primary">Tambah</a>
                            <a href="{{ url('/index/datapsy') }}" class="badge bg-success">list</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="fs-5">pendaftar_instrumen</td>
                            <td>
                            <a href="{{ url('/index/pi') }}" class="badge bg-primary">Tambah</a>
                            <a href="{{ url('/index/datapi') }}" class="badge bg-success">list</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="fs-5">asesor_jenis_sertifikasi</td>
                            <td>
                            <a href="{{ url('/index/ajs') }}" class="badge bg-primary">Tambah</a>
                            <a href="{{ url('/index/dataajs') }}" class="badge bg-success">list</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="fs-5">asesor_pendaftar</td>
                            <td>
                            <a href="{{ url('/index/ap') }}" class="badge bg-primary">Tambah</a>
                            <a href="{{ url('/index/dataap') }}" class="badge bg-success">list</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="fs-5">jadwal</td>
                            <td>
                            <a href="{{ url('/index/jadwal') }}" class="badge bg-primary">Tambah</a>
                            <a href="{{ url('/index/datajadwal') }}" class="badge bg-success">list</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="fs-5">pendaftar_kuesioner</td>
                            <td>
                            <a href="{{ url('/index/pk') }}" class="badge bg-primary">Tambah</a>
                            <a href="{{ url('/index/datapk') }}" class="badge bg-success">list</a>
                            </td>
                        </tr>
                    </tbody>
                 </table>
            </div>
        </div>
    </div>
@endsection