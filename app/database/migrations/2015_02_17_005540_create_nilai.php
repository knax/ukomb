<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNilai extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nilai', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('angka');
			$table->string('huruf', 30);
			$table->integer('siswa_id')->unsigned();
			$table->foreign('siswa_id')
				  ->on('siswa')
				  ->references('id')
				  ->onUpdate('cascade')
				  ->onDelete('cascade');
			$table->integer('standar_kompetensi_id')->unsigned();
			$table->foreign('standar_kompetensi_id')
				  ->on('standar_kompetensi')
				  ->references('id')
				  ->onUpdate('cascade')
				  ->onDelete('cascade');
			$table->integer('guru_id')->unsigned();
			$table->foreign('guru_id')
				  ->on('guru')
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
		Schema::drop('nilai');
	}

}
