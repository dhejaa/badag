<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\peminjaman;
class PeminjamanController extends Controller
{
    public function index(){
      $Peminjaman  = Peminjaman::all();
      return view('Peminjaman',compact('Peminjaman'));
    }
}