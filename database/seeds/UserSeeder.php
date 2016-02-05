<?php

use Illuminate\Database\Seeder;
use Laracasts\TestDummy\Factory;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = \Faker\Factory::create();
        $faker->addProvider(new \Faker\Provider\el_GR\Person($faker));
        $faker->addProvider(new \Faker\Provider\el_GR\Company($faker));


        //create users
        Factory::times(1)->create('App\User', ['email' => 'admin@me.com', 'password' => bcrypt('adminadmin'), 'role' => 'admin']);
        Factory::times(10)->create('App\User');
        //create business users
        $busNames=[];
        for ($i = 0; $i <= 5; $i++) {
            $busNames[] = $faker->company;
        }
        foreach ($busNames as $busName) {
            Factory::create('App\User', ['name' => $busName, 'role' => 'business']);

        }
    }
}
