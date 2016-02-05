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
        foreach ($catNames as $catName) {
            Factory::create('App\Category', ['name' => $catName]);
        }

        //categorize receipts
        $receipts = \App\Receipt::all();
        $categories = \App\Category::all();
        foreach ($receipts as $receipt) {
            $receipt->categories()->sync(
                array_pluck($categories->random(mt_rand(2,3)), 'id')
            );
        }
    }
}
