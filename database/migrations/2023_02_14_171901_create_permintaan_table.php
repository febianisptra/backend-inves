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
        Schema::create('permintaan', function (Blueprint $table) {
            $table->integer('id_permintaan')->autoIncrement();
            // $table->integer('nip');
            $table->string('nama_guru');
            $table->integer('id_barang');
            $table->foreign('id_barang')->references('id_barang')->on('barang');
            $table->date('tanggal_permintaan');
            $table->text('alasan_permintaan');
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
        Schema::dropIfExists('permintaan');
    }
};
