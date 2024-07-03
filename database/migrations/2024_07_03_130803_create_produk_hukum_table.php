<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdukHukumTable extends Migration
{
    public function up()
    {
        Schema::create('produk_hukum', function (Blueprint $table) {
            $table->id();
            $table->enum('jenis_produk', ['Peraturan Desa', 'Peraturan Kepala Desa']);
            $table->string('judul');
            $table->text('isi');
            $table->date('tanggal');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('produk_hukum');
    }
}
