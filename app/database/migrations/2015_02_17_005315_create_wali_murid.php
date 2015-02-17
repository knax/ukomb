<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWaliMurid extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wali_murid', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nama_ayah', 50);
			$table->string('pekerjaan_ayah', 50);
			$table->string('nama_ibu', 50);
			$table->string('pekerjaan_ibu', 50);
			$table->text('alamat');
			$table->string('telepon', 20);
			$table->integer('siswa_id')->unsigned();
			$table->foreign('siswa_id')
				  ->on('siswa')
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
		Schema::drop('wali_murid');
	}

}
