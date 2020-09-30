<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCustomer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id_customers');
            $table->string('Nik');
            $table->string('Nama_customers');
            $table->text('alamat');
            $table->date('tgl_lahir');
            $table->string('Jenis_kelamin');
            $table->string('Status_kawin');
            $table->string('No_telp');
            $table->string('Username');
            $table->string('Password');
            $table->string('Foto');
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
        Schema::dropIfExists('customers');
    }
}
