<?php

namespace App\Http\Controllers;

use App\Models\buku;
use Illuminate\Http\Request;

class PeminjamController extends Controller
{
    public  function tampilBuku2()
    {
        $buku = buku::all();
        return view('Peminjam.buku', (compact('buku')));
    }
    public function create()
    {
        return view('peminjam.create');
    }

    public function store(Request $request)
{
    // Validasi input jika diperlukan

    $peminjam = new buku();
    $peminjam->namapeminjam = $request->namapeminjam;
    $peminjam->judulbuku = $request->judulbuku;
    $peminjam->tanggalpeminjaman = now(); // Gunakan waktu saat ini sebagai tanggal peminjaman
    // Anda mungkin ingin menambahkan tanggal pengembalian default atau menghitungnya berdasarkan aturan bisnis Anda
    $peminjam->statuspeminjaman = 'Pinjam'; // Atur status peminjaman sesuai kebutuhan

    if ($peminjam->save()) {
        return redirect()->back()->with('success', 'Buku berhasil dipinjam.');
    } else {
        return redirect()->back()->with('error', 'Gagal meminjam buku. Silakan coba lagi.');
    }
}

}