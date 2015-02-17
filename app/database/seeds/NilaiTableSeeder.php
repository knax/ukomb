<?php

// Composer: "fzaninotto/faker": "v1.3.0"


class NilaiTableSeeder extends Seeder
{

    public function run()
    {


        foreach (range(1, 10) as $index) {
            $huruf = ['A', 'B', 'C', 'D', 'E'];
            Nilai::create([
                'angka' => $index,
                'huruf' => $huruf[rand(0, 4)],
                'siswa_id' => $index,
                'guru_id' => $index,
                'standar_kompetensi_id' => $index
            ]);
        }
    }

}