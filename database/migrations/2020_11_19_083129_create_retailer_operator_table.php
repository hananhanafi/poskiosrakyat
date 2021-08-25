<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRetailerOperatorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retailer_operator', function (Blueprint $table) {
            $table->integer('id_retailer_operator', true);
            $table->integer('id_retailer')->index('id_retailer');
            $table->string('username', 100);
            $table->string('password', 100);
            $table->string('nama', 100);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('id_retailer')->references('id_retailer')->on('retailer')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('retailer_operator');
    }
}