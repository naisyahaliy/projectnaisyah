<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
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
//     return view('index');
// });
Route::middleware('statusLogin')->group(function() {
});
Route::get('/', [UserController::class, 'beranda']);
Route::get('/masuklogin', [UserController::class, 'masuk']);
Route::get('/admin', [UserController::class, 'admin']);
Route::get('/sudahlogin', [UserController::class, 'loginmasuk']);
// Route::get('/create', [UserController::class, 'createproduk']);
Route::get('/login', [UserController::class, 'login']);
// Route::get('/', [ProdukController::class, 'index']);
Route::post('/auth', [UserController::class,'auth']);
Route::get('/logout', [UserController::class, 'logout']);
Route::get('/home',[ProdukController::class,'show']);

Route::get('/dshboard', [ProdukController::class, 'show']);
Route::get('/beli', [UserController::class, 'beliproduk']);
Route::get('/beliii', [UserController::class, 'belilagi']);
Route::get('/detailtri', [UserController::class, 'buy']);
Route::get('/belitri', [UserController::class, 'buye']);
Route::get('/belifor', [UserController::class, 'bel']);
Route::get('/beli5', [UserController::class, 'beli5']);
Route::get('/beli6', [UserController::class, 'beli6']);

Route::get('/transaksi', [UserController::class, 'trans']);
Route::get('/transaksi2', [UserController::class, 'trans2']);
Route::get('/transaksi3', [UserController::class, 'trans3']);
Route::get('/transaksi4', [UserController::class, 'trans4']);
Route::get('/transaksi5', [UserController::class, 'trans5']);
Route::get('/transaksi6', [UserController::class, 'trans6']);

Route::get('/keranjangku', [UserController::class, 'keranjangnai']);
Route::get('/keranjang2', [UserController::class, 'ker']);
Route::get('/keranjang3', [UserController::class, 'ker3']);
Route::get('/keranjang4', [UserController::class, 'ker4']);
Route::get('/keranjang5', [UserController::class, 'ker5']);
Route::get('/keranjang6', [UserController::class, 'ker6']);

Route::get('/detailfor', [UserController::class, 'buyes']);
Route::get('/detail5', [UserController::class, 'det5']);
Route::get('/detail6', [UserController::class, 'det6']);

Route::get('/membeli', [UserController::class, 'checkout']);
Route::get('/troli', [UserController::class, 'keranjangku']);

Route::get('/produkku', [UserController::class, 'detailproduk']);
Route::get('/homesaya', [UserController::class, 'home']);
Route::get('/tentang', [UserController::class, 'tentangkami']);
Route::get('/akun', [UserController::class, 'account']);
Route::get('/editakun', [UserController::class, 'editprof']);

Route::post('/dshboard/search',[ProdukController::class,'search']);
Route::get('/produk/create',[ProdukController::class,'create']);
Route::post('/produk/create',[ProdukController::class,'add']);
Route::get('/produk/edit/{id}', [ProdukController::class, 'edit']);
Route::post('/produk/edit/{id}',[ProdukController::class,'update']);
Route::get('/produk/delete/{id}',[ProdukController::class,'delete']);


