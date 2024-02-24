<?php

namespace App\Http\Controllers;

use App\Models\kategoribuku;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KategoribukuController extends Controller
{
    public function index()
    {
        $kategoribuku = kategoribuku::all();
        return view('kategoribuku.kategoribuku', compact('kategoribuku'));
    }

    public function create()
    {
        return view('kategoribuku.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'NamaKategori' => 'required|string|max:255',
        ]);

        kategoribuku::create($request->all());

        return redirect()->route('kategoribuku.index')
            ->with('success', 'Kategori buku berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $kategoribuku = kategoribuku::find($id);
        return view('kategoribuku.edit', compact('kategoribuku'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'NamaKategori' => 'required|string|max:255',
        ]);

        $kategoribuku = kategoribuku::find($id);
        $kategoribuku->update($request->all());

        return redirect()->route('kategoribuku.index')
            ->with('success', 'Kategori buku berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $kategoribuku = kategoribuku::findOrFail($id);
        $kategoribuku->delete();

        return redirect()->route('kategoribuku.index')
            ->with('success', 'Kategori buku berhasil dihapus.');
    }

    public function generatePDF()
    {
        $kategoribuku = kategoribuku::all();

        $pdf = PDF::loadView('kategoribuku.kategoripdf', ['kategoribuku' => $kategoribuku]);

        return $pdf->stream('laporan-kategoribuku.pdf');
    }
}
