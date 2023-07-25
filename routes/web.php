<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PesananController;
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

Route::get('/', [BarangController::class,'utama']);

Route::get('/tambahdata', function () {
    return view('input'); //indexadmin
});

Route::get('/viewbarang', function () {
    return view('viewbarang'); //indexadmin
});

Route::resource('Barang', BarangController::class);