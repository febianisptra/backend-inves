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
        Schema::create('teknisi', function (Blueprint $table) {
            $table->id();
            $table->integer('id_teknis');
            $table->integer('id_pengembalian');
            $table->foreign('id_pengembalian')->references('id_pengembalian')->on('pengembalian');
            $table->enum('status_teknis', (['perlu_diperbaiki', 'sedang_diperbaiki', 'sudah_diperbaiki']));
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
        Schema::dropIfExists('teknisi');
    }
};
