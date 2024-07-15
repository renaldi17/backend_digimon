<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JenisSurat extends Model
{
    use HasFactory;

    protected $fillable = ['jenis_surat', 'deskripsi'];

    public function pengajuanSurat(): HasMany {
        return $this->hasMany(PengajuanSurat::class);
    }
}
