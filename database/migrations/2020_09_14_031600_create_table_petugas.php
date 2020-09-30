<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePetugas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petugas', function (Blueprint $table) {
            $table->increments('id_petugas');
            $table->string('Nama');
            $table->date('Tgl_Lahir');
            $table->string('Alamat');
            $table->string('Jabatan');
            $table->string('No_telp');
            $table->string('Username');
            $table->string('Password');
            $table->integer('id_level')->unsigned();
            $table->string('Foto');
            $table->timestamps();
            $table->foreign('id_level')->references('id')->on('levels');
            
            
            
            
            



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('petugas');
    }
}
