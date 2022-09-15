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
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_lengkap');
            $table->string('nomor_identitas');
            $table->string('nomor_hp');
            $table->string('tempat_wisata');
            $table->date('tanggal_kunjungan');
            $table->integer('pengunjung_dewasa');
            $table->integer('pengunjung_anak_anak');
            $table->float('total_bayar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemesanans');
    }
};
