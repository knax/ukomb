<?php

// Composer: "fzaninotto/faker": "v1.3.0"


class KompetensiKeahlianTableSeeder extends Seeder {

	public function run()
	{


		foreach(range(1, 10) as $index)
		{
			KompetensiKeahlian::create([
				'nama' => 'Kompetensi Keahlian' . $index,
				'mata_diklat_id' => $index
			]);
		}
	}

}