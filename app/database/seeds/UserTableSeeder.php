<?php
	class UserTableSeeder extends \Seeder{

		public function run(){

			User::create([
				'username'=>'arjun',
				'password'=> Hash::make('123456')
			]);

			User::create([
				'username' => 'raju',
				'password' => Hash::make('s)Gd\~>Z|x<0\7l')
			]);

			User::create([
				'username' => 'ramesh',
				'password' => Hash::make('Loremipsum.')
			]);

		}

	}

 ?>