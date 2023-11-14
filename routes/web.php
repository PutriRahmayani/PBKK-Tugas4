<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
route::get('/ ', function() {
    return view('/template/home');
});

route::get('template/barang', [BarangController::class, 'index']);

route::get('template/kategori', [KategoriController::class, 'index']);



route::get('/template/edit_barang ', function() {
    return view('/template/edit_barang');
});

route::get('/template/tambah_barang ', function() {
    return view('/template/tambah_barang');
});

route::get('/template/tambah_ruangan', function() {
    return view('/template/tambah_ruangan');
});

Route::get('/template/tambah_barang', [BarangController::class, 'create']);

Route::get('/template/ruangan', [\App\Http\Controllers\RuanganController::class,'index']);
