<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsumerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consumer', function (Blueprint $table) {
            $table->integer('id_consumer', true);
            $table->string('no_hp', 20);
            $table->string('email', 100)->nullable();
            $table->string('nama', 100);
            $table->string('foto', 100)->nullable();
            $table->enum('jenis_kelamin', ['male', 'female'])->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->timestamp('suspended_until')->nullable();
            $table->string('referral_code', 10);
            $table->string('reset_code', 6)->nullable();
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
        Schema::dropIfExists('consumer');
    }
}
