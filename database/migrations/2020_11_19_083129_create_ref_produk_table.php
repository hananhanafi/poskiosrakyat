<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_produk', function (Blueprint $table) {
            $table->integer('id_ref_produk', true);
            $table->integer('id_ref_kategori')->index('id_kategori');
            $table->integer('id_ref_merk')->index('id_merk');
            $table->string('nama', 100);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ref_produk');
    }
}
