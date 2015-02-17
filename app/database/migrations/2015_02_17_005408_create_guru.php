<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGuru extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('guru', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nama', 50);
			$table->string('nip', 20)->unique();
			$table->text('alamat');
			$table->string('telepon', 20);
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
		Schema::drop('guru');
	}

}
