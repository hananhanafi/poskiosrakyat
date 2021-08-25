<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRetailerProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retailer_produk', function (Blueprint $table) {
            $table->integer('id_retailer_produk', true);
            $table->integer('id_ref_produk')->index('id_ref_produk');
            $table->integer('id_retailer')->index('id_retailer');
            $table->string('kode_produk', 100)->index('kode_produk');
            $table->string('nama', 100);
            $table->text('deskripsi_produk');
            $table->string('foto', 100)->nullable();
            $table->double('harga_jual');
            $table->double('harga_diskon')->nullable();
            $table->integer('stok')->default(0);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('id_retailer')->references('id_retailer')->on('retailer')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_ref_produk')->references('id_ref_produk')->on('ref_produk')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('retailer_produk');
    }
}
