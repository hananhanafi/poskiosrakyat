<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRetailerProdukStokDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retailer_produk_stok_detail', function (Blueprint $table) {
            $table->integer('id_retailer_produk_stok_detail', true);
            $table->integer('id_retailer_produk_stok')->index('id_retailer_produk_stok');
            $table->double('harga')->default(0);
            $table->integer('jumlah')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('retailer_produk_stok_detail');
    }
}
