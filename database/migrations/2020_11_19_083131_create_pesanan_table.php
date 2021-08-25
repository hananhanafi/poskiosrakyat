<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanan', function (Blueprint $table) {
            $table->string('kode_pesanan', 18)->primary();
            $table->integer('id_consumer')->index('id_consumer');
            $table->integer('id_voucher')->nullable()->index('id_voucher');
            $table->integer('id_pengiriman')->index('id_pengiriman');
            $table->string('no_resi', 100)->nullable();
            $table->string('village_id', 13);
            $table->text('alamat');
            $table->string('penerima', 100);
            $table->string('no_hp', 20);
            $table->string('latitude', 20)->nullable();
            $table->string('longitude', 20)->nullable();
            $table->double('total_harga');
            $table->double('ongkir');
            $table->double('potongan');
            $table->double('total_bayar');
            $table->timestamp('ordered_at')->nullable();
            $table->timestamp('confirmed_at')->nullable();
            $table->timestamp('ondelivery_at')->nullable();
            $table->timestamp('delivered_at')->nullable();
            $table->timestamp('completed_at')->nullable();
            $table->timestamp('cancelled_at')->nullable();
            $table->text('cancelled_reason')->nullable();
            $table->integer('rating')->nullable();
            $table->text('komentar')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanan');
    }
}
