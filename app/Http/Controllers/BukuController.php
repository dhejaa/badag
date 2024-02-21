<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\buku;

class BukuController extends Controller
{
    public function index(){
        $buku = buku :: all();
        return view('buku',compact('buku'));
    }

    public function create()
    {
        return view('create');
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
        $buku = Buku::find($id);
        return view('edit', compact('buku'));
    }

    /**
     * update the specifited resource in storage.
     */
    public function update(Request $request, $id)
    {
        $update = buku::find($id);

        $update ->update([
            'judul' => $request->get('judul'),
            'penulis' => $request->get('penulis'),
            'penerbit' => $request->get('penerbit'),
            'TahunTerbit' => $request->get('TahunTerbit'),
        ]);

        return redirect()->route('buku.index')->with('success','buku edit successfully');
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
}
