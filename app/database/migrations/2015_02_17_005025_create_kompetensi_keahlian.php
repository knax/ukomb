<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKompetensiKeahlian extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kompetensi_keahlian', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 50);
            $table->integer('mata_diklat_id')->unsigned();
            $table->foreign('mata_diklat_id')
                  ->on('mata_diklat')
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
        Schema::drop('kompetensi_keahlian');
    }

}
