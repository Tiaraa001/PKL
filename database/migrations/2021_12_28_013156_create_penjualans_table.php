<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjualansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualans', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->unique;
            $table->unsignedBigInteger('pelanggan_id');
            $table->unsignedBigInteger('produk_id');
            $table->integer('harga');
            $table->integer('qty');
            $table->timestamps();

            $table->foreign('pelanggan_id')->references('id')->on('pelanggans');
            $table->foreign('produk_id')->references('id')->on('produks');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penjualans');
    }
}
