<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function admin() 
    {
        return view('home');
    }

    public function petugas() 
    {
        return view('homepetugas');
    }

    public function peminjam() 
    {
        return view('peminjam');
    }

}
