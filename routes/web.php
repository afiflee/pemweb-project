<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\rjsController;
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

Route::get('/', [HomeController::class, 'index'])->name('dashboard');
Route::get('/index', [HomeController::class, 'tabel']);

//tabel ref_jenis_sertifikasi
Route::get('/index/rjs', [rjscontroller::class, 'create']);
Route::post('/index/rjs', [rjscontroller::class, 'store']);