<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\PenjualanDetailController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\SuplierController;
use App\Http\Controllers\TransaksiController;
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

Auth::routes(
    [
        'register' => true,
    ]
);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/', FrontendController::class);

// hanya untuk role admin
// Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {
//     route::get('/', function () {
//         return 'halaman admin';
//     });

//     Route::get('profile', function () {
//         return 'halaman profile admin';
//     });
// });

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    route::get('buku', function () {
        return view('buku.index');
    })->middleware(['role:admin|pengguna']);

    Route::get('pengarang', function () {
        return view('pengarang.index');
    })->middleware(['role:admin']);

});

// hanya untuk role pengguna
Route::group(['prefix' => 'pengguna', 'middleware' => ['auth', 'role:pengguna']], function () {
    route::get('/', function () {
        return 'halaman pengguna';
    });

    Route::get('profile', function () {
        return 'halaman profile pengguna';
    });
});

// route penjualan alat olahraga
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    route::get('/', function () {
        return view('layouts.admin');
    })->middleware(['role:admin']);

    Route::resource('produk', ProdukController::class);
    Route::resource('suplier', SuplierController::class);
    Route::resource('penjualan', PenjualanController::class);
    Route::resource('penjualanDetail', PenjualanDetailController::class);
    Route::resource('pelanggan', PelangganController::class);
    Route::resource('transaksi', TransaksiController::class);
});
