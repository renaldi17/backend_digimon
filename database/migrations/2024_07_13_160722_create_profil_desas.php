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
        Schema::create('profil_desas', function (Blueprint $table) {
            $table->id();
            $table->string('gambar_kepala_desa');
            $table->string('nama_kepala_desa');
            $table->text('deskripsi_kepala_desa');
            $table->string('gambar_perangkat_desa');
            $table->string('gambar_sejarah_desa');
            $table->text('sejarah_desa');
            $table->text('visi_desa');
            $table->text('misi_desa');
            $table->text('tujuan_desa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profil_desa');
    }
};
