<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pengajuan_surats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('penduduk_id')->constrained();
            $table->foreignId('jenis_surat_id')->constrained();
            $table->text('catatan')->nullable();
            $table->string('rt');
            $table->string('rw');
            $table->string('ktp');
            $table->string('kk');
            $table->string('pengantar_rt_rw');
            $table->enum('status', ['Diajukan', 'Disetujui', 'Ditolak'])->default('Diajukan');
            $table->text('alasan')->nullable();
            $table->date('tanggal_pengambilan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuan_surats');
    }
};
