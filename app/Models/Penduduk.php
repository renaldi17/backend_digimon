<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Penduduk extends Model
{
    protected $table = 'penduduks'; // Sesuaikan dengan nama tabel yang benar

    protected $fillable = [
        'NIK', 'No_KK', 'nama', 'tanggal_lahir', 'tempat_lahir', 'jenis_kelamin',
        'status', 'pekerjaan', 'RT', 'RW', 'alamat', 'pendidikan'
    ];

    public function pengajuanSurat(): HasMany
    {
        return $this->hasMany(PengajuanSurat::class);
    }
}
