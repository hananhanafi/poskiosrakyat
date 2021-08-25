<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsumerAlamatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consumer_alamat', function (Blueprint $table) {
            $table->integer('id_consumer_alamat', true);
            $table->integer('id_consumer')->index('id_consumer');
            $table->string('village_id', 13)->index('village_id');
            $table->text('alamat');
            $table->string('penerima', 100);
            $table->string('no_hp', 20);
            $table->string('latitude', 20)->nullable();
            $table->string('longitude', 20)->nullable();
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
        Schema::dropIfExists('consumer_alamat');
    }
}
