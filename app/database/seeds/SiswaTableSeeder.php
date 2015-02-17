<?php

// Composer: "fzaninotto/faker": "v1.3.0"


class SiswaTableSeeder extends Seeder {

	public function run()
	{


		foreach(range(1, 10) as $index)
		{
			Siswa::create([
				'nisn' => '9975421' . $index,
				'nama' => 'Siswa ' . $index,
				'alamat' => 'Alamat ' . $index,
				'tanggal_lahir' => new DateTime(),
				'foto' => 'foto' . $index . '.jpg',
				'kompetensi_keahlian_id' => $index
			]);
		}
	}

}