<?php

// Composer: "fzaninotto/faker": "v1.3.0"


class StandarKompetensiTableSeeder extends Seeder {

	public function run()
	{


		foreach(range(1, 10) as $index)
		{
			StandarKompetensi::create([
				'nama' => 'Standar Kompetensi ' . $index,
				'kelas' => 'Kelas ' . $index,
				'kompetensi_keahlian_id' => $index
			]);
		}
	}

}