<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategoribuku;

class kategoribukuController extends Controller
{
    public function index(){
        $kategoribuku = kategoribuku :: all();
        return view('kategoribuku',compact('kategoribuku'));
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
$kategoribuku = new kategoribuku;

$kategoribuku->namakategori = $request->namabuku;
$kategoribuku->save();

return redirect()->route('kategoribuku.index');
    }

    public function show(kategoribuku $kategoribuku)
    {
        //
    }

    /**
     * show the form for editing the specifited rosource.
     */
    public function edit($id)
    {
        $kategoribuku = kategoribuku::find($id);
        return view('edit', compact('kategoribuku'));
    }

    /**
     * update the specifited resource in storage.
     */
    public function update(Request $request, $id)
    {
        $update = kategoribuku::find($id);

        $update ->update([
            'NamaKategori' => $request->get('NamaKategori'),
        ]);

        return redirect()->route('kategoribuku.index')->rith('succes','kategoribuku edit successfully');
    }

    /**
     * remove the specifited resource form storage.
     */
    public function destroy($id)
    {
        $kategoribuku = kategoribuku::findOrFail($id);
        if ($kategoribuku){
            $kategoribuku->delete();
            return redirect()->route('kategoribuku.index')->with('success','Data kategoribuku berhasil dihapus');
        };
        return redirect()->route('kategoribuku.index')->with('eror','Data kategoribuku tidak ditemukan');
    }
}
