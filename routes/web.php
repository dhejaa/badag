<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriBukuController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\UlasanBukuController;
use App\Models\peminjaman;

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
    return view('welcome');
});

//Buku
route::get('/buku',[BukuController::class, 'index'])->name('buku.index');
route::get('createbuku', [BukuController::class, 'create'])->name('buku.create');
route::post('createbuku', [BukuController::class, 'store'])->name('buku.store');
route::get('deletbuku/{id}', [BukuController::class, 'destroy'])->name('buku.destroy');
route::get('editbuku/{id}', [BukuController::class, 'edit'])->name('buku.edit');
route::post('editbuku/{id}', [BukuController::class, 'update'])->name('buku.update');

//Kategori Buku
route::get('/kategoribuku',[KategoriBukuController::class, 'index'])->name('kategoribuku.index');
route::get('createkategoribuku',[KategoriBukuController::class, 'create'])->name('kategoribuku.create');
route::post('createkategoribuku',[KategoriBukuController::class, 'store'])->name('kategoribuku.store');
route::get('deletkategoribuku/{id}',[KategoriBukuController::class, 'destroy'])->name('kategoribuku.destroy');
route::get('editkategoribuku/{id}',[KategoriBukuController::class, 'edit'])->name('kategoribuku.edit');
route::post('editkategoribuku/{id}',[KategoriBukuController::class, 'update'])->name('kategoribuku.update');

//Peminjaman
route::get('/peminjaman',[PeminjamanController::class, 'index'])->name('peminjaman.index');
route::get('createpeminjaman',[PeminjamanController::class, 'create'])->name('peminjaman.create');
route::post('createpeminjaman',[PeminjamanController::class, 'store'])->name('peminjaman.store');
route::get('deletpeminjaman/{id}',[PeminjamanController::class, 'destroy'])->name('peminjaman.destroy');
route::get('editpeminjaman/{id}',[PeminjamanController::class, 'edit'])->name('peminjaman.edit');
route::post('editpeminjaman/{id}',[PeminjamanController::class, 'update'])->name('peminjaman.update');

//Ulasan Buku
route::get('/ulasanbuku',[UlasanBukuController::class, 'index'])->name('ulasanbuku.index');
route::get('createulasanbuku',[UlasanBukuController::class, 'create'])->name('ulasanbuku.create');
route::post('createulasanbuku',[UlasanBukuController::class, 'store'])->name('ulasanbuku.store');
route::get('deletulasanbuku',[UlasanBukuController::class, 'destroy'])->name('ulasanbuku.destroy');
route::get('editulasanbuku',[UlasanBukuController::class, 'edit'])->name('ulasanbuku.edit');
route::post('editulasanbuku',[UlasanBukuController::class, 'update'])->name('ulasanbuku.update');
