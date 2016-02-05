<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Laracasts\TestDummy\Factory;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		DB::statement('SET FOREIGN_KEY_CHECKS=0;');

		\App\User::truncate();
		\App\Receipt::truncate();
		\App\Category::truncate();

		$this->call('UserSeeder');
		$this->call('ReceiptSeeder');
		$this->call('CategorySeeder');



		DB::statement('SET FOREIGN_KEY_CHECKS=0;');
	}

}
