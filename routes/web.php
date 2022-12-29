<?php

use App\Http\Controllers\BarangmasukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LaporanController;
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
Route::get('/', function () {
    return view('user.login', ['title' => 'login']);
})->name('login');

Route::get('home', function () {
    return view('home', ['title' => 'home']);
})->name('home');

Route::group(['middleware' => ['auth']], function (){
    Route::group(['middleware' => ['\App\Http\Middleware\cekUserLogin:1']], function (){
        Route::resource('admin',HomeController::class);
    });
});


Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');
Route::get('password', [UserController::class, 'password'])->name('password');
Route::post('password', [UserController::class, 'password_action'])->name('password.action');
Route::get('logout', [UserController::class, 'logout'])->name('logout');

Route::get('kategori/kategori', [KategoriController::class, 'index'])->name('kategori');
Route::get('kategori/kategori-add', [KategoriController::class, 'add'])->name('kategori-add');
Route::post('kategoris', [KategoriController::class,'addProcess']);
Route::get('kategori/kategori-edit/{id}',[KategoriController::class,'edit']);
Route::patch('kategori/{id}', [KategoriController::class,'editProcess']);
Route::delete('kategori/{id}',[KategoriController::class,'delete']);

Route::get('produk/produk', [ProdukController::class, 'index'])->name('produk');
Route::get('produk/produk-add', [ProdukController::class, 'add'])->name('produk-add');
Route::post('produks', [ProdukController::class,'addProcess']);
Route::get('produk/produk-edit/{id}',[ProdukController::class,'edit']);
Route::patch('produk/{id}', [ProdukController::class,'editProcess']);
Route::delete('produk/{id}',[produkController::class,'delete']);

Route::get('pengeluaran', [PengeluaranController::class, 'index']);
Route::get('pengeluaran/add', [PengeluaranController::class, 'add']);
Route::post('pengeluaran', [PengeluaranController::class, 'addProcess']);
Route::get('pengeluaran/edit/{id}', [PengeluaranController::class, 'edit']);
Route::patch('pengeluaran/{id}', [PengeluaranController::class, 'editProcess']);
Route::delete('pengeluaran/{id}', [PengeluaranController::class, 'delete']);

Route::get('Barang-masuk/Barang-masuk', [BarangmasukController::class, 'index'])->name('produk');
Route::get('Barang-masuk/Barang-masuk-add', [BarangmasukController::class, 'add'])->name('produk-add');
Route::post('Barang-masuks', [BarangmasukController::class,'addProcess']);
Route::get('Barang-masuk/Barang-masuk-edit/{id}',[BarangmasukController::class,'edit']);
Route::patch('Barang-masuk/{id}', [BarangmasukController::class,'editProcess']);
Route::delete('Barang-masuk/{id}',[BarangmasukController::class,'delete']);

Route::get('laporan', [LaporanController::class, 'index'])->name('laporan.index');
Route::get('laporan/pdf/{awal}/{akhir}', [LaporanController::class, 'exportPDF'])->name('laporan.export');
