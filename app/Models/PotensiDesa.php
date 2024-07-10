<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PotensiDesa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'jenis',
        'gambar',
        'deskripsi',
        'lokasi',
        'hari_buka',
        'hari_tutup',
        'buka',
        'tutup',
    ];

    // Menambahkan casts untuk kolom waktu jika diperlukan
    protected $casts = [
        'buka' => 'datetime:H:i',
        'tutup' => 'datetime:H:i',
    ];
}
