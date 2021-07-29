<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pelayanan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelayanan', function (Blueprint $table) {
            $table->id('id_pelayanan');
            $table->unsignedBigInteger('id_paket');
            $table->unsignedBigInteger('id_siswa');
            $table->unsignedBigInteger('id_kelas');
            $table->unsignedBigInteger('id_pengajar')->nullable();
            $table->enum('status', ['perlu dibayar','aktif','selesai']);
            $table->enum('status_bayar', ['belum lunas','lunas']);
            $table->timestamps();
            $table->foreign('id_paket')->references('id_paket')->on('paket');
            $table->foreign('id_siswa')->references('id_siswa')->on('siswa');
            $table->foreign('id_kelas')->references('id_kelas')->on('kelas');
            $table->foreign('id_pengajar')->references('id_pengajar')->on('pengajar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelayanan');
        Schema::dropIfExists('paket');
        Schema::dropIfExists('siswa');
        Schema::dropIfExists('kelas');
        Schema::dropIfExists('pengajar');
    }
}
