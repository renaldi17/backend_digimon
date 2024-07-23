<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PengajuanSurat extends Model
{
    use HasFactory;

    protected $fillable = ['penduduk_id', 'jenis_surat_id', 'catatan', 'ktp', 'kk', 'rt', 'rw', 'pengantar_rt_rw', 'status', 'alasan', 'tanggal_pengambilan', 'file_balasan'];

    public function penduduk(): BelongsTo
    {
        return $this->belongsTo(Penduduk::class);
    }

    public function jenisSurat(): BelongsTo
    {
        return $this->belongsTo(JenisSurat::class);
    }
}
