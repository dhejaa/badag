<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ulasanBuku extends Model
{
    use HasFactory;

    protected $fillable = [
        'UserID', 'BukuID','Ulasan', 'Rating'
    ];
}
