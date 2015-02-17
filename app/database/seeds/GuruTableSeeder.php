<?php

// Composer: "fzaninotto/faker": "v1.3.0"


class GuruTableSeeder extends Seeder {

	public function run()
	{


		foreach(range(1, 10) as $index)
		{
			Guru::create([
				'nama' => 'Guru ' . $index,
				'nip' => '1213102' . $index,
				'alamat' => 'Alamat ' . $index,
				'telepon' => '0212252' . $index,
 				'kompetensi_keahlian_id' => $index
			]);
		}
	}

}