<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    protected $table = 'penduduks'; // Sesuaikan dengan nama tabel yang benar

    protected $fillable = [
        'NIK', 'No_KK', 'nama', 'tanggal_lahir', 'tempat_lahir', 'jenis_kelamin',
        'status', 'pekerjaan', 'RT', 'RW', 'alamat', 'pendidikan'
    ];
}
