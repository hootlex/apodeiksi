<?php

use Illuminate\Database\Seeder;
use Laracasts\TestDummy\Factory;

class ReceiptSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = \App\User::whereRole('user')->get();
        //create receipts
        foreach ($users as $user) {
            Factory::times(rand(2, 6))->create('App\Receipt', ['user_id' => $user->id]);
        }
        $business= \App\User::business()->get();
        foreach ($business as $b) {
            for ($i = 1; $i <= rand(5, 10); $i++) {
                Factory::times(rand(2, 6))->create('App\Receipt', [
                    'afm' => $b->afm,
                    'eponimia' => $b->name,
                    'user_id' => $users->random()->id
                ]);
            }
        }
    }
}
