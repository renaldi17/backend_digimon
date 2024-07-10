<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis_informasi', 'judul', 'gambar', 'konten', 'tanggal',
    ];
}
