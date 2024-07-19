<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penghargaan extends Model
{
    use HasFactory;

    protected $fillable = ['judul', 'gambar', 'konten', 'tanggal'];

    protected $dates = ['tanggal'];
}
