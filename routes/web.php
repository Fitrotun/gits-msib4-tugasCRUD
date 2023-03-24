<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KeranjangController;

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

Route::get('/', function () {
    return view('penjualan.home');
});

Route::get('/login', function () {
    return view('/login', ["title"=>"Login"]);
});

Route::get('/penjualan/home', function () {
    return view('penjualan/home', ["title"=>"Home"]);
});

//tampil data kategori
Route::get('/penjualan/kategori', [KategoriController::class,'index']);

//fungsi create kategori
Route::get('/penjualan/tambah', [KategoriController::class,'create']);

//untuk edit data kategori
Route::get('/penjualan/kategori/{id}/edit', [KategoriController::class, 'edit']);


//untuk delete data kategori
Route::get('/penjualan/kategori/{id}/delete', [KategoriController::class, 'destroy']);

Route::post('/penjualan/kategori', [KategoriController::class, 'store']);

//untuk update data kategori
Route::put('/penjualan/kategori/{id}',[KategoriController::class, 'update']);

//==================================

//tampil data produk
Route::get('/product/produk', [ProdukController::class, 'index']);

//fungsi create produk
Route::get('/product/add', [ProdukController::class,'create']);

//untuk edit data produk
Route::get('/product/produk/{id}/edit', [ProdukController::class, 'edit']);

//untuk delete data Produk
Route::get('/product/produk/{id}/delete', [ProdukController::class, 'destroy']);

Route::post('/product/produk', [ProdukController::class, 'store']);

//untuk update data mahasiswa
Route::put('/product/produk/{id}',[ProdukController::class, 'update']);

//===========================



Route::fallback(function () {
    return '404 | SORRY, Halaman  tidak tersedia';
});

//keranjang resource
Route::resource('keranjang',KeranjangController::class);

//untuk delete data Produk keranjang
Route::get('/product/produk/{id}/delete', [KeranjangController::class, 'destroy']);
