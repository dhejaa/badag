<?php

namespace App\Http\Controllers;

use App\Models\ulasanBuku;
use Illuminate\Http\Request;
class UlasanBukuController extends Controller
{
    public function index(){
        $UlasanBuku = UlasanBuku :: all();
        return view('UlasanBuku',compact('UlasanBuku'));
    //
    }
}
