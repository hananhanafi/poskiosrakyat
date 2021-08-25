<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesananProdukDigitalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanan_produk_digital', function (Blueprint $table) {
            $table->string('kode_pesanan', 20)->primary();
            $table->integer('id_consumer')->index('id_consumer');
            $table->integer('id_voucher')->index('id_voucher');
            $table->string('penerima', 100);
            $table->integer('id_produk_digital')->index('id_produk_digital');
            $table->double('harga_beli');
            $table->double('harga_jual');
            $table->double('potongan');
            $table->double('total_bayar');
            $table->timestamp('ordered_at')->nullable();
            $table->timestamp('confirmed_at')->nullable();
            $table->timestamp('processed_at')->nullable();
            $table->timestamp('completed_at')->nullable();
            $table->timestamp('cancelled_at')->nullable();
            $table->timestamp('cancelled_reason')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanan_produk_digital');
    }
}
