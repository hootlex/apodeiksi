<?php

use Illuminate\Database\Seeder;
use Laracasts\TestDummy\Factory;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('receipt_category')->truncate();

        //create categories
        $catNames=[
            'Εγγυήσεις', 'Ένδυση', 'Ψώνια', 'Ηλεκτρονικά',
            'Υπολογιστές', 'Καύσιμα', 'Τρόφιμα', 'Αυτοκίνητο',
            'Οικιακά', 'Έπιπλα', 'Καλλυντικά', 'Τηλεφωνία'
        ];
        $users = \App\User::whereRole('user')->get();
        foreach ($users as $user) {
            foreach ($catNames as $catName) {
                Factory::create('App\Category', ['name' => $catName, 'user_id' => $user->id]);
            }
            foreach ($user->receipts as $receipt) {
                $receipt->categories()->sync(
                    array_pluck($user->categories->random(mt_rand(2,3)), 'id')
                );
            }
        }
    }
}
