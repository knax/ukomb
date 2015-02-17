<?php

// Composer: "fzaninotto/faker": "v1.3.0"


class MataDiklatTableSeeder extends Seeder {

	public function run()
	{


		foreach(range(1, 10) as $index)
		{
			MataDiklat::create([
				'nama' => 'Mata Diklat ' . $index
			]);
		}
	}

}