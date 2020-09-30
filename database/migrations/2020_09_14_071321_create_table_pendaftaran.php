<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePendaftaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->increments('id_Pendaftaran');
            $table->date('Tgl_Pemesanan');
            $table->integer('Nik')->unsigned();
            $table->integer('id_Lokasi')->unsigned();
            $table->date('Tgl_Test');
            $table->integer('Jumlah_Orang');
            $table->integer('No_Antrian');
            $table->string('Total_Biaya');
            $table->integer('id_Petugas')->unsigned();
            $table->timestamps();
            $table->foreign('Nik')->references('id_customers')->on('customers');
            $table->foreign('id_Lokasi')->references('id_lokasi')->on('lokasis');
            $table->foreign('id_Petugas')->references('id_petugas')->on('petugas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftarans');
    }
}
