<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class konter extends Model
{
    use HasFactory;
    protected $fillablev = [
        'gambar',
        'judul',
        'deskripsi',

    ];
}
