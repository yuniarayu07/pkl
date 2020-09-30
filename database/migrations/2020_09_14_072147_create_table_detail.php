<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->increments('id_Pendaftaran');
            $table->integer('No_Pendaftaran')->unsigned();
            $table->integer('Jumlah_Orang');
            $table->integer('id_Fasilitas')->unsigned();
            $table->foreign('No_Pendaftaran')->references('id_pendaftaran')->on('pendaftarans');
            $table->foreign('id_Fasilitas')->references('id_fasilitas')->on('fasilitas');
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
        Schema::dropIfExists('details');
    }
}
