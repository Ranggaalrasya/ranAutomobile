<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobil_barus', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('merk');
            $table->integer('harga');
            $table->string('tipe');
            $table->string('transmisi');
            $table->string('bahan_bakar');
            $table->string('mesin');
            $table->string('kapasitas');
            $table->string('warna');
            $table->string('gambar_display');
            $table->string('gambar_depan');
            $table->string('gambar_kiri');
            $table->string('gambar_belakang');
            $table->string('gambar_kanan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mobil_barus');
    }
};
