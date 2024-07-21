<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateGambarPerangkatDesaToVideoDesaInProfilDesas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('profil_desas', function (Blueprint $table) {
            // Menghapus kolom gambar_perangkat_desa jika ada
            $table->dropColumn('gambar_perangkat_desa');

            // Menambahkan kolom video_desa
            $table->string('video_desa')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('profil_desas', function (Blueprint $table) {
            // Menghapus kolom video_desa jika ada
            $table->dropColumn('video_desa');

            // Menambahkan kembali kolom gambar_perangkat_desa
            $table->string('gambar_perangkat_desa')->nullable();
        });
    }
}
