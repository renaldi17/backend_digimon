<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    // app/Models/Galeri.php
    protected $fillable = ['judul', 'deskripsi', 'gambar'];

}
