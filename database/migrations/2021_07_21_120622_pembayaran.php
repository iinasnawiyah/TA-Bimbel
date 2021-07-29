<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pembayaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran', function (Blueprint $table) {
        $table->id('id_pembayaran');
        $table->unsignedBigInteger('id_pelayanan');
        $table->string('bukti_pembayaran');
        $table->enum('status_cek', ['Belum dicek','Sudah dicek']);
        $table->timestamps();
        $table->foreign('id_pelayanan')->references('id_pelayanan')->on('pelayanan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembayaran');
        Schema::dropIfExists('pelayanan');
    }
}
