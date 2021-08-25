<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRetailerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retailer', function (Blueprint $table) {
            $table->integer('id_retailer', true);
            $table->string('nama_toko', 100);
            $table->string('nama_pemilik', 100);
            $table->string('username', 100)->nullable();
            $table->string('password', 100)->nullable();
            $table->string('no_hp', 20);
            $table->string('village_id', 13)->index('village_id');
            $table->text('alamat');
            $table->string('latitude', 20);
            $table->string('longitude', 20);
            $table->string('file_foto_depan', 100);
            $table->string('file_foto_ktp', 100);
            $table->integer('id_ref_bank')->nullable()->index('id_bank');
            $table->string('no_rekening', 100)->nullable();
            $table->time('open_at')->nullable();
            $table->time('closed_at')->nullable();
            $table->tinyInteger('is_open')->default(0);
            $table->integer('warning_count');
            $table->timestamp('suspend_start')->nullable();
            $table->timestamp('suspend_end')->nullable();
            $table->integer('suspend_count')->default(0);
            $table->double('saldo')->default(0);
            $table->timestamps();
            $table->timestamp('reviewed_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('retailer');
    }
}
