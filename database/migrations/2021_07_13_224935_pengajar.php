<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pengajar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajar', function (Blueprint $table) {
            $table->id('id_pengajar');
            $table->unsignedBigInteger('id_user');
            $table->string('nama_pengajar');
            $table->string('telepon');
            $table->string('alamat');
            $table->date('tanggal_masuk');
            $table->timestamps();
            $table->foreign('id_user')->references('id_user')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengajar');
        Schema::dropIfExists('users');
    }
}
