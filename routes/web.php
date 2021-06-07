<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\rjsController;
use App\Http\Controllers\ajscontroller;
use App\Http\Controllers\apcontroller;
use App\Http\Controllers\asesorcontroller;
use App\Http\Controllers\rukcontroller;
use App\Http\Controllers\rkcontroller;
use App\Http\Controllers\rkucontroller;
use App\Http\Controllers\uksertifcontroller;
use App\Http\Controllers\asesicontroller;
use App\Http\Controllers\sscontroller;
use App\Http\Controllers\pscontroller;
use App\Http\Controllers\picontroller;
use App\Http\Controllers\psycontroller;
use App\Http\Controllers\pcontroller;
use App\Http\Controllers\iakcontroller;
use App\Http\Controllers\jadwalcontroller;
use App\Http\Controllers\pkcontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/index', [HomeController::class, 'tabel']);

//tabel ref_jenis_sertifikasi
Route::get('/index/rjs', [rjscontroller::class, 'create']);
Route::get('/index/datarjs', [rjscontroller::class, 'index']);
Route::post('/index/rjs', [rjscontroller::class, 'store']);
Route::delete('/datarjs/{refjenissertifikasi}', [rjscontroller::class, 'destroy']);
Route::get('/datarjs/{refjenissertifikasi}/edit', [rjscontroller::class, 'edit']);
Route::put('/datarjs/{refjenissertifikasi}', [rjscontroller::class, 'update']);

//tabel asesor
Route::get('/index/asesor', [asesorcontroller::class, 'create']);
Route::get('/index/dataasesor', [asesorcontroller::class, 'index']);
Route::post('/index/asesor', [asesorcontroller::class, 'store']);
Route::delete('/dataasesor/{asesor}', [asesorcontroller::class, 'destroy']);
Route::get('/dataasesor/{asesor}/edit', [asesorcontroller::class, 'edit']);
Route::put('/dataasesor/{asesor}', [asesorcontroller::class, 'update']);

//tabel unitkompetensi
Route::get('/index/ruk', [rukcontroller::class, 'create']);
Route::get('/index/dataruk', [rukcontroller::class, 'index']);
Route::post('/index/ruk', [rukcontroller::class, 'store']);
Route::delete('/dataruk/{refunitkompetensi}', [rukcontroller::class, 'destroy']);
Route::get('/dataruk/{refunitkompetensi}/edit', [rukcontroller::class, 'edit']);
Route::put('/dataruk/{refunitkompetensi}', [rukcontroller::class, 'update']);

//tabel asesi
Route::get('/index/asesi', [asesicontroller::class, 'create']);
Route::get('/index/dataasesi', [asesicontroller::class, 'index']);
Route::post('/index/asesi', [asesicontroller::class, 'store']);
Route::delete('/dataasesi/{asesi}', [asesicontroller::class, 'destroy']);
Route::get('/dataasesi/{asesi}/edit', [asesicontroller::class, 'edit']);
Route::put('/dataasesi/{asesi}', [asesicontroller::class, 'update']);

//tabel ref_kegiatan
Route::get('/index/rk', [rkcontroller::class, 'create']);
Route::get('/index/datark', [rkcontroller::class, 'index']);
Route::post('/index/rk', [rkcontroller::class, 'store']);
Route::delete('/datark/{refkegiatan}', [rkcontroller::class, 'destroy']);
Route::get('/datark/{refkegiatan}/edit', [rkcontroller::class, 'edit']);
Route::put('/datark/{refkegiatan}', [rkcontroller::class, 'update']);

//tabel ref_kuesioner
Route::get('/index/rku', [rkucontroller::class, 'create']);
Route::get('/index/datarku', [rkucontroller::class, 'index']);
Route::post('/index/rku', [rkucontroller::class, 'store']);
Route::delete('/datarku/{refkuesioner}', [rkucontroller::class, 'destroy']);
Route::get('/datarku/{refkuesioner}/edit', [rkucontroller::class, 'edit']);
Route::put('/datarku/{refkuesioner}', [rkucontroller::class, 'update']);

//tabel unit_kompetensi_sertifikasi
Route::get('/index/uksertif', [uksertifcontroller::class, 'create']);
Route::get('/index/datauksertif', [uksertifcontroller::class, 'index']);
Route::post('/index/uksertif', [uksertifcontroller::class, 'store']);
Route::delete('/datauksertif/{unitkompetensisertifikasi}', [uksertifcontroller::class, 'destroy']);
Route::get('/datauksertif/{unitkompetensisertifikasi}/edit', [uksertifcontroller::class, 'edit']);
Route::put('/datauksertif/{unitkompetensisertifikasi}', [uksertifcontroller::class, 'update']);

//tabel syarat_sertifikasi
Route::get('/index/ss', [sscontroller::class, 'create']);
Route::get('/index/datass', [sscontroller::class, 'index']);
Route::post('/index/ss', [sscontroller::class, 'store']);
Route::delete('/datass/{syaratsertifikasi}', [sscontroller::class, 'destroy']);
Route::get('/datass/{syaratsertifikasi}/edit', [sscontroller::class, 'edit']);
Route::put('/datass/{syaratsertifikasi}', [sscontroller::class, 'update']);


//tabel instrumen_asesmen_kompetensi
Route::get('/index/iak', [iakcontroller::class, 'create']);
Route::get('/index/dataiak', [iakcontroller::class, 'index']);
Route::post('/index/iak', [iakcontroller::class, 'store']);
Route::delete('/dataiak/{instrumenasesmenkompetensi}', [iakcontroller::class, 'destroy']);
Route::get('/dataiak/{instrumenasesmenkompetensi}/edit', [iakcontroller::class, 'edit']);
Route::put('/dataiak/{instrumenasesmenkompetensi}', [iakcontroller::class, 'update']);


//tabel penawaran_sertifikasi
Route::get('/index/ps', [pscontroller::class, 'create']);
Route::get('/index/dataps', [pscontroller::class, 'index']);
Route::post('/index/ps', [pscontroller::class, 'store']);
Route::delete('/dataps/{penawaransertifikasi}', [pscontroller::class, 'destroy']);
Route::get('/dataps/{penawaransertifikasi}/edit', [pscontroller::class, 'edit']);
Route::put('/dataps/{penawaransertifikasi}', [pscontroller::class, 'update']);

//tabel pendaftar
Route::get('/index/p', [pcontroller::class, 'create']);
Route::get('/index/datap', [pcontroller::class, 'index']);
Route::post('/index/p', [pcontroller::class, 'store']);
Route::delete('/datap/{pendaftar}', [pcontroller::class, 'destroy']);
Route::get('/datap/{pendaftar}/edit', [pcontroller::class, 'edit']);
Route::put('/datap/{pendaftar}', [pcontroller::class, 'update']);

//tabel pendaftar_syarat
Route::get('/index/psy', [psycontroller::class, 'create']);
Route::get('/index/datapsy', [psycontroller::class, 'index']);
Route::post('/index/psy', [psycontroller::class, 'store']);
Route::delete('/datapsy/{pendaftarsyarat}', [psycontroller::class, 'destroy']);
Route::get('/datapsy/{pendaftarsyarat}/edit', [psycontroller::class, 'edit']);
Route::put('/datapsy/{pendaftarsyarat}', [psycontroller::class, 'update']);


//tabel pendaftar_instrumen
Route::get('/index/pi', [picontroller::class, 'create']);
Route::get('/index/datapi', [picontroller::class, 'index']);
Route::post('/index/pi', [picontroller::class, 'store']);
Route::delete('/datapi/{pendaftarinstrumen}', [picontroller::class, 'destroy']);
Route::get('/datapi/{pendaftarinstrumen}/edit', [picontroller::class, 'edit']);
Route::put('/datapi/{pendaftarinstrumen}', [picontroller::class, 'update']);

//tabel asesor_jenis_sertifikat
Route::get('/index/ajs', [ajscontroller::class, 'create']);
Route::get('/index/dataajs', [ajscontroller::class, 'index']);
Route::post('/index/ajs', [ajscontroller::class, 'store']);
Route::delete('/dataajs/{asesorjenissertifikasi}', [ajscontroller::class, 'destroy']);
Route::get('/dataajs/{asesorjenissertifikasi}/edit', [ajscontroller::class, 'edit']);
Route::put('/dataajs/{asesorjenissertifikasi}', [ajscontroller::class, 'update']);

//tabel asesor_pendaftar
Route::get('/index/ap', [apcontroller::class, 'create']);
Route::get('/index/dataap', [apcontroller::class, 'index']);
Route::post('/index/ap', [apcontroller::class, 'store']);
Route::delete('/dataap/{asesorpendaftar}', [apcontroller::class, 'destroy']);
Route::get('/dataap/{asesorpendaftar}/edit', [apcontroller::class, 'edit']);
Route::put('/dataap/{asesorpendaftar}', [apcontroller::class, 'update']);

//tabel jadwal
Route::get('/index/jadwal', [jadwalcontroller::class, 'create']);
Route::get('/index/datajadwal', [jadwalcontroller::class, 'index']);
Route::post('/index/jadwal', [jadwalcontroller::class, 'store']);
Route::delete('/datajadwal/{jadwal}', [jadwalcontroller::class, 'destroy']);
Route::get('/datajadwal/{jadwal}/edit', [jadwalcontroller::class, 'edit']);
Route::put('/datajadwal/{jadwal}', [jadwalcontroller::class, 'update']);

//tabel pendaftar_kuesioner
Route::get('/index/pk', [pkcontroller::class, 'create']);
Route::get('/index/datapk', [pkcontroller::class, 'index']);
Route::post('/index/pk', [pkcontroller::class, 'store']);
Route::delete('/datapk/{pendaftarkuesioner}', [pkcontroller::class, 'destroy']);
Route::get('/datapk/{pendaftarkuesioner}/edit', [pkcontroller::class, 'edit']);
Route::put('/datapk/{pendaftarkuesioner}', [pkcontroller::class, 'update']);