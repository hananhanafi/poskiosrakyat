<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePosCartDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pos_cart_detail', function (Blueprint $table) {
            $table->integer('id_pos_cart_detail', true);
            $table->integer('id_pos_cart')->index('id_pos_cart');
            $table->integer('id_retailer_produk')->index('id_retailer_produk');
            $table->integer('jumlah');
            $table->foreign('id_pos_cart')->references('id_pos_cart')->on('pos_cart')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('pos_cart_detail');
    }
}
