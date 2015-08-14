<?php

class UsersTableSeeder extends Seeder {

	public function run() {
		$user = new User;
		$user->firstname = 'Deyvis';
		$user->lastname = 'Valdez Huanca';
		$user->email = 'deyvis.vh@gmail.com';
		$user->password = Hash::make('12345678');
		$user->telephone = '952983869';
		$user->admin = 1;
		$user->save();
	}
}