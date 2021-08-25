<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRetailerProdukStokTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retailer_produk_stok', function (Blueprint $table) {
            $table->integer('id_retailer_produk_stok', true);
            $table->integer('id_retailer_produk')->index('id_retailer_produk');
            $table->double('harga_beli');
            $table->integer('jumlah');
            $table->integer('terjual')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('retailer_produk_stok');
    }
}
