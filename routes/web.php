<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoribukuController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\UlasanBukuController;
use App\Models\Peminjaman;

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
    return view('layout.main');
});

//Buku
route::get('/buku',[BukuController::class, 'index'])->name('buku.index');
route::get('createbuku', [BukuController::class, 'create'])->name('buku.create');
route::post('createbuku', [BukuController::class, 'store'])->name('buku.store');
route::post('deletbuku/{id}', [BukuController::class, 'destroy'])->name('buku.destroy');
route::get('editbuku/{id}', [BukuController::class, 'edit'])->name('buku.edit');
route::post('editbuku/{id}', [BukuController::class, 'update'])->name('buku.update');
route::get('bukupdf', [BukuController::class, 'generatePDF'])->name('buku.bukupdf');


//Kategori Buku
route::get('/kategoribuku',[KategoribukuController::class, 'index'])->name('kategoribuku.index');
route::get('createkategoribuku',[KategoribukuController::class, 'create'])->name('kategoribuku.create');
route::post('createkategoribuku',[KategoribukuController::class, 'store'])->name('kategoribuku.store');
route::post('deletkategoribuku/{id}',[KategoribukuController::class, 'destroy'])->name('kategoribuku.destroy');
route::get('edit/{id}',[KategoribukuController::class, 'edit'])->name('kategoribuku.edit');
route::post('edit/{id}',[KategoribukuController::class, 'update'])->name('kategoribuku.update');
route::get('kategoripdf', [KategoribukuController::class, 'generatePDF'])->name('kategoribuku.kategoripdf');


//Peminjaman
route::get('/peminjaman',[PeminjamanController::class, 'index'])->name('peminjaman.index');
route::get('createpeminjaman',[PeminjamanController::class, 'create'])->name('peminjaman.create');
route::post('createpeminjaman',[PeminjamanController::class, 'store'])->name('peminjaman.store');
route::post('deletpeminjaman/{id}',[PeminjamanController::class, 'destroy'])->name('peminjaman.destroy');
route::get('editpeminjaman/{id}',[PeminjamanController::class, 'edit'])->name('peminjaman.edit');
route::post('editpeminjaman/{id}',[PeminjamanController::class, 'update'])->name('peminjaman.update');
route::get('peminjamanpdf', [PeminjamanController::class, 'generatePDF'])->name('peminjaman.peminjamanpdf');

//Ulasan Buku
route::get('/ulasanbuku',[UlasanBukuController::class, 'index'])->name('ulasanbuku.index');
route::get('createulasanbuku',[UlasanBukuController::class, 'create'])->name('ulasanbuku.create');
route::post('createulasanbuku',[UlasanBukuController::class, 'store'])->name('ulasanbuku.store');
route::get('deletulasanbuku/{id}',[UlasanBukuController::class, 'destroy'])->name('ulasanbuku.destroy');
route::get('editulasanbuku/{id}',[UlasanBukuController::class, 'edit'])->name('ulasanbuku.edit');
route::post('editulasanbuku/{id}',[UlasanBukuController::class, 'update'])->name('ulasanbuku.update');
route::get('ulasanpdf', [UlasanBukuController::class, 'generatePDF'])->name('ulasanbuku.ulasanbukupdf');