<?php

class UserTableSeeder extends Seeder {

	public function run()
	{
			User::create([
				'username' => 'knax',
				'password' => Hash::make('standar'),
				'type'	   => 'admin',
				'active' => true
			]);

		User::create([
			'username' => 'siswa',
			'password' => Hash::make('standar'),
			'type'	   => 'siswa',
			'identifier' => 1
		]);
		User::create([
			'username' => 'guru',
			'password' => Hash::make('standar'),
			'type'	   => 'guru',
			'identifier' => 1
		]);
		User::create([
			'username' => 'wali_murid',
			'password' => Hash::make('standar'),
			'type'	   => 'wali_murid',
			'identifier' => 1
		]);

	}

}