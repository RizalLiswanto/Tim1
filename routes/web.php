<?php

use App\Http\Controllers\KategoriController;
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


    Route::group(['middleware' => ['\App\Http\Middleware\cekUserLogin:2']], function (){
        Route::resource('guru',HomeController::class);
    });

    Route::group(['middleware' => ['\App\Http\Middleware\cekUserLogin:3']], function (){
        Route::resource('siswa',HomeController::class);
    });
});


Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');
Route::get('password', [UserController::class, 'password'])->name('password');
Route::post('password', [UserController::class, 'password_action'])->name('password.action');
Route::get('logout', [UserController::class, 'logout'])->name('logout');

Route::get('edulevels', 'App\Http\Controllers\DataController@data');
Route::get('edulevels/add', 'App\Http\Controllers\DataController@add');
Route::post('edulevels', 'App\Http\Controllers\DataController@addProcess');
Route::get('edulevels/edit/{id}', 'App\Http\Controllers\DataController@edit');
Route::patch('edulevels/{id}', 'App\Http\Controllers\DataController@editProcess');
Route::delete('edulevels/{id}', 'App\Http\Controllers\DataController@delete');

Route::get('kategori/kategori', [KategoriController::class, 'index'])->name('kategori');
Route::get('kategori/kategori-add', [KategoriController::class, 'add'])->name('kategori-add');
Route::post('kategoris', [KategoriController::class,'addProcess']);
Route::get('kategori/kategori-edit/{id}',[KategoriController::class,'edit']);
Route::patch('kategori/{id}', [KategoriController::class,'editProcess']);
Route::delete('kategori/{id}',[KategoriController::class,'delete']);

Route::get('produk/produk', [ProdukController::class, 'index'])->name('produk');
Route::get('produk/produk-add', [ProdukController::class, 'add'])->name('produk-add');
Route::post('produks', [KategoriController::class,'addProcess']);

