<?php

namespace App\Http\Controllers;

use App\Models\ulasanbuku;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UlasanBukuController extends Controller
{
    public function index()
  {
      $UlasanBuku = ulasanbuku::all();
      return view('ulasanbuku.ulasanbuku', compact('UlasanBuku'));
  }

  public function create()
  {
      return view('ulasanbuku.create');
  }

  public function store(Request $request)
  {
     $UlasanBuku = New UlasanBuku;

     $UlasanBuku->UserID = $request->UserID;
     $UlasanBuku->BukuID = $request->BukuID;
     $UlasanBuku->Ulasan = $request->Ulasan;
     $UlasanBuku->Rating = $request->Rating;
     $UlasanBuku->save();

      return redirect()->route('ulasanbuku.index')
          ->with('success', 'ulasan berhasil ditambahkan.');
  }

  public function show(UlasanBuku $UlasanBuku)
  {
      return view('ulasanbuku.show', compact('UlasanBuku'));
  }

  public function edit($id)
  {
    $UlasanBuku = ulasanbuku::find($id);
    return view('ulasanbuku.edit', compact('UlasanBuku'));
  }

  public function update(Request $request, $id)
{
    $request->validate([
        'UserID' => 'required',
        'BukuID' => 'required',
        'Ulasan' => 'required',
        'Rating' => 'required'
    ]);
    
    $UlasanBuku = ulasanbuku::find($id);

    // Hanya atribut-atribut yang disebutkan dalam validasi yang akan diperbarui
    $UlasanBuku->update([
        'UserID' => $request->input('UserID'),
        'BukuID' => $request->input('BukuID'),
        'Ulasan' => $request->input('Ulasan'),
        'Rating' => $request->input('Rating')
    ]);

    return redirect()->route('ulasanbuku.index')
        ->with('success', 'UlasanBuku berhasil diperbarui.');
}


  public function destroy($id)
  {
    $UlasanBuku = ulasanbuku::findOrFail($id);
    $UlasanBuku->delete();

      return redirect()->route('ulasanbuku.index')
          ->with('success', 'UlasanBuku berhasil dihapus.');
  }

  public function generatePDF()
  {
      $UlasanBuku = ulasanbuku::all();

      $pdf = PDF::loadView('ulasanbuku.ulasanbukupdf', ['UlasanBuku' => $UlasanBuku]);

      return $pdf->stream('laporan-ulasanbuku.pdf');
  }
}
