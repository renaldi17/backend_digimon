<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenduduksTable extends Migration
{
    public function up()
    {
        Schema::create('penduduks', function (Blueprint $table) {
            $table->id();
            $table->string('NIK')->unique();
            $table->string('No_KK');
            $table->string('nama');
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->enum('status', ['Belum Kawin', 'Kawin', 'Cerai Hidup', 'Cerai Mati']);
            $table->string('pekerjaan');
            $table->string('RT');
            $table->string('RW');
            $table->text('alamat');
            $table->enum('pendidikan', ['SD', 'SMP', 'SMA', 'Diploma', 'S1', 'S2', 'S3', 'Putus Sekolah']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('penduduks');
    }
}
