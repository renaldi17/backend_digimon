<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdukHukumsTable extends Migration
{
    public function up()
    {
        Schema::create('produk_hukums', function (Blueprint $table) {
            $table->id();
            $table->enum('jenis_produk', ['Hukum Desa', 'Hukum Kepala Desa']);
            $table->string('judul');
            $table->text('isi');
            $table->date('tanggal');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('produk_hukums');
    }
}
