<?php

namespace App\Http\Controllers;

use App\Models\buku;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BukuController extends Controller
{
    public function index(){
        $buku = buku :: all();
        return view('buku.buku',compact('buku'));
    }

    public function create()
    {
        return view('buku.create');
    }

    /**
     * store a newly created resource in stroage.
     */
    public function store(Request $request)
    {
    $buku = new Buku;

    $buku->judul = $request->judul;
    $buku->penulis = $request->penulis;
    $buku->penerbit = $request->penerbit;
    $buku->TahunTerbit = $request->TahunTerbit;
    $buku->save();

    return redirect()->route('buku.index');
    }

    public function show(Buku $buku)
    {
    //
    }

    /**
     * show the form for editing the specifited rosource.
     */
    public function edit($id)
    {
        $buku = buku::find($id);
        return view('.buku.edit', compact('buku'));
    }

    /**
     * update the specifited resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'penerbit' => 'required|string|max:255',
            'TahunTerbit' => 'required|date',
        ]);
    
        // dd($data);
        
        // Kode di bawah ini tidak akan dijalankan karena `dd()` di atas.
        // Ini hanya contoh jika Anda ingin melanjutkan setelah validasi.
        buku::findOrFail($id)->update([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'TahunTerbit' => $request->TahunTerbit,
        ]);
    
        return redirect()->route('buku.index')->with('success', 'Buku berhasil diperbarui.');
    }
    

    /**
     * remove the specified resource form storage.
     */
    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);
        if ($buku){
            $buku->delete();
            return redirect()->route('buku.index')->with('success','Data buku berhasil dihapus');
        }
        return redirect()->route('buku.index')->with('error','Data buku tidak ditemukan');
    }

    public function generatePDF()
    {
        $buku = buku::all();

        $pdf = PDF::loadView('buku.bukupdf', ['buku' => $buku]);

        return $pdf->stream('laporan-buku.pdf');
    }
}
