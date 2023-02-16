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
        Schema::create('barang', function (Blueprint $table) {
            $table->integer('id_barang')->autoIncrement();
            $table->integer('jumlah_barang');
            $table->string('nama_barang');
            $table->string('merek_barang');
            $table->string('kategori');
            $table->text('spesifikasi');
            // $table->string('nama_barang');
            // $table->string('jenis_barang');
            // $table->string('sumber_dana');
            // $table->date('tanggal_pengadaan');
            // $table->string('jumlah_barang');
            // $table->string('merk_barang');
            // $table->string('kategori_barang');
            // $table->enum('kondisi_barang', (['baik', 'kurang_baik', 'buruk']));
            // $table->string('deskripsi_barang');
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
        Schema::dropIfExists('barang');
    }
};
