<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePotensiDesasTable extends Migration
{
    public function up()
    {
        Schema::create('potensi_desas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->enum('jenis', ['umkm', 'wisata']);
            $table->string('gambar')->nullable();
            $table->text('deskripsi');
            $table->string('lokasi');
            $table->string('hari_buka');
            $table->string('hari_tutup');
            $table->time('buka');
            $table->time('tutup');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('potensi_desas');
    }
}
