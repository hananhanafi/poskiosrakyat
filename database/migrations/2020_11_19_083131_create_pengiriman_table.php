<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengirimanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengiriman', function (Blueprint $table) {
            $table->integer('id_pengiriman', true);
            $table->enum('type', ['ekspress', 'reguler'])->nullable();
            $table->string('nama', 100);
            $table->integer('countdown')->comment('in minutes');
            $table->time('service_start');
            $table->time('service_end');
            $table->integer('biaya')->default(0);
            $table->string('satuan', 100);
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
        Schema::dropIfExists('pengiriman');
    }
}
