<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesananPosDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanan_pos_detail', function (Blueprint $table) {
            $table->integer('id_pesanan_pos_detail', true);
            $table->integer('kode_pesanan')->index('kode_pesanan');
            $table->integer('id_retailer_produk')->index('id_retailer_produk');
            $table->double('harga');
            $table->integer('jumlah');
            $table->double('subtotal');
            //$table->foreign('kode_pesanan')->references('kode_pesanan')->on('pesanan_pos')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_retailer_produk')->references('id_retailer_produk')->on('retailer_produk')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanan_pos_detail');
    }
}
