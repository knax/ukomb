<?php

// Composer: "fzaninotto/faker": "v1.3.0"


class WaliMuridTableSeeder extends Seeder {

	public function run()
	{


		foreach(range(1, 10) as $index)
		{
			WaliMurid::create([
				'nama_ayah' => 'Ayah ' . $index,
				'pekerjaan_ayah' => 'Pekerjaan Ayah ' . $index,
				'nama_ibu' => 'Ibu ' . $index,
				'pekerjaan_ibu' => 'Pekerjaan Ibu' . $index,
				'alamat' => 'Alamat ' . $index,
				'telepon' => '08182154' . $index,
 				'siswa_id' => $index
			]);
		}
	}

}