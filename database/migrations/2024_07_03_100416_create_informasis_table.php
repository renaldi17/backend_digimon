<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('informasis', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('gambar')->nullable();
            $table->enum('jenis', ['berita', 'pengumuman', 'agenda', 'apb'])->default('berita');
            $table->text('deskripsi');
            $table->date('tanggal');
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informasis');
    }
};