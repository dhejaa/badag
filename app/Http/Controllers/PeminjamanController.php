<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PeminjamanController extends Controller
{
    public function index()
  {
      $peminjaman = peminjaman::all();
      return view('peminjaman.peminjaman', compact('peminjaman'));
  }

  public function create()
  {
      return view('peminjaman.create');
  }

  public function store(Request $request)
  {
     $peminjaman = New Peminjaman;

     $peminjaman->UserID = $request->UserID;
     $peminjaman->BukuID = $request->BukuID;
     $peminjaman->TanggalPeminjaman = $request->TanggalPeminjaman;
     $peminjaman->TanggalPengembalian = $request->TanggalPengembalian;
     $peminjaman->StatusPeminjaman = $request->StatusPeminjaman;
     $peminjaman->save();

      return redirect()->route('peminjaman.index')
          ->with('success', 'Peminjaman berhasil ditambahkan.');
  }

  public function show(Peminjaman $peminjaman)
  {
      return view('peminjaman.show', compact('peminjaman'));
  }

  public function edit($id)
  {
    $peminjaman = Peminjaman::find($id);
    return view('peminjaman.edit', compact('peminjaman'));
  }

  public function update(Request $request, $id)
{
    $request->validate([
        'UserID' => 'required',
        'BukuID' => 'required',
        'TanggalPeminjaman' => 'required',
        'TanggalPengembalian' => 'required',
        'StatusPeminjaman' => 'required'
    ]);
    
    $peminjaman = Peminjaman::find($id);

    // Hanya atribut-atribut yang disebutkan dalam validasi yang akan diperbarui
    $peminjaman->update([
        'UserID' => $request->input('UserID'),
        'BukuID' => $request->input('BukuID'),
        'TanggalPeminjaman' => $request->input('TanggalPeminjaman'),
        'TanggalPengembalian' => $request->input('TanggalPengembalian'),
        'StatusPeminjaman' => $request->input('StatusPeminjaman')
    ]);

    return redirect()->route('peminjaman.index')
        ->with('success', 'Peminjaman berhasil diperbarui.');
}


  public function destroy($id)
  {
    $peminjaman = Peminjaman::findOrFail($id);
    $peminjaman->delete();

      return redirect()->route('peminjaman.index')
          ->with('success', 'Peminjaman berhasil dihapus.');
  }

  public function generatePDF()
  {
      $peminjaman = Peminjaman::all();

      $pdf = PDF::loadView('peminjaman.peminjamanpdf', ['peminjaman' => $peminjaman]);

      return $pdf->stream('laporan-peminjaman.pdf');
  }
}
