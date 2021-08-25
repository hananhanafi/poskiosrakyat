<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesananPosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanan_pos', function (Blueprint $table) {
            $table->string('kode_pesanan', 21)->primary();
            $table->integer('id_retailer')->index('id_retailer');
            $table->integer('id_retailer_operator')->index('id_retailer_operator');
            $table->timestamp('tanggal')->nullable();
            $table->foreign('id_retailer')->references('id_retailer')->on('retailer')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_retailer_operator')->references('id_retailer_operator')->on('retailer_operator')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanan_pos');
    }
}
