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
        Schema::create('ruangan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->string('jenis_barang');
            $table->date('tanggal_pengadaan');
            $table->string('sumber_dana');
            $table->integer('jumlah_barang');
            $table->string('merk_barang');
            $table->enum('kondisi_barang', (['baik', 'kurang_baik', 'buruk']));
            $table->string('deksripsi_barang');
            $table->string('penanggungjawab_ruangan');
            $table->string('nama_ruangan');
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
        Schema::dropIfExists('ruangan');
    }
};
