<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('MataDiklatTableSeeder');
		$this->call('KompetensiKeahlianTableSeeder');
		$this->call('SiswaTableSeeder');
		$this->call('WaliMuridTableSeeder');
		$this->call('GuruTableSeeder');
		$this->call('StandarKompetensiTableSeeder');
		$this->call('NilaiTableSeeder');
		$this->call('UserTableSeeder');
	}

}
