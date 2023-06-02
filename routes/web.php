<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\C_paket;
use App\Http\Controllers\C_wisata;
use App\Http\Controllers\C_kategori;
use App\Http\Controllers\C_galeri;
use App\Http\Controllers\C_akun;
use App\Http\Controllers\C_transaksi;

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

Route::get('/', function () {
    return view('beranda');
});
Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/template', function() {
    return view('blank');
});

Route::get('/kategori', [C_kategori::class, 'index']);
Route::get('/kategori/tambah', function() {
    return view('crud/kategori/tambah_kategori');
});
Route::post('/kategori/tambah', [C_kategori::class, 'tambah']);
Route::get('/kategori/edit/{id}', [C_kategori::class, 'edit']);
Route::post('/kategori/edit', [C_kategori::class, 'update']);
Route::get('/kategori/delete/{id}', [C_kategori::class, 'delete']);

Route::get('/wisata', [C_wisata::class, 'index']);
Route::get('/wisata/tambah', [C_wisata::class, 'tambah_view']);
Route::post('/wisata/tambah', [C_wisata::class, 'tambah']);
Route::get('/wisata/edit/{id}', [C_wisata::class, 'edit']);
Route::post('/wisata/edit', [C_wisata::class, 'update']);
Route::get('/wisata/delete/{id}', [C_wisata::class, 'delete']);

Route::get('/paket', [C_paket::class, 'index']);
Route::get('/paket/tambah', [C_paket::class, 'tambah_view']);
Route::post('/paket/tambah', [C_paket::class, 'tambah']);



Route::get('/galeri', [C_galeri::class, 'index']);
Route::get('/akun', [C_akun::class, 'index']);
Route::get('/transaksi-paket', [C_transaksi::class, 'index']);
Route::get('/transaksi-member', [C_transaksi::class, 'member']);
Route::get('/transaksi-member/{id}', [C_transaksi::class, 'member_id']);

