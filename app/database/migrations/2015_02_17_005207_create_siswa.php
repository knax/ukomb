<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSiswa extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nisn', 20)->unique();
            $table->string('nama', 50);
            $table->text('alamat');
            $table->date('tanggal_lahir');
            $table->string('foto');
            $table->integer('kompetensi_keahlian_id')->unsigned();
            $table->foreign('kompetensi_keahlian_id')
                  ->on('kompetensi_keahlian')
                  ->references('id')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('siswa');
    }

}
