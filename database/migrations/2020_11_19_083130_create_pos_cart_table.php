<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePosCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pos_cart', function (Blueprint $table) {
            $table->integer('id_pos_cart', true);
            $table->integer('id_retailer')->index('id_retailer');
            $table->integer('id_retailer_operator')->index('id_retailer_operator');
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
        Schema::dropIfExists('pos_cart');
    }
}
