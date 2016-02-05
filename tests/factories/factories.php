<?php

$rImages=[];
for ($i = 1; $i <= 8; $i++) {
    $rImages[]='http://apodeiksi.tk/images/demo-receipts/'.$i.'.png';
}

$factory('App\User', [
    'name' => $faker->name,
    'email' => $faker->email,
    'password' => bcrypt('password'),
    'level' => 0,
    'role' => 'user',
    'afm' => $faker->randomNumber(9)

]);
$factory('App\Receipt', [
    'aa' => $faker->numberBetween(10000, 1000000),
    'afm' => $faker->randomNumber(9),
    'eponimia' => $faker->company,
    'poso' => $faker->randomFloat(2, 1, 1500),
    'image' => $faker->randomElement($rImages),
    'printed_at' => $faker->dateTime(),
    'user_id' => 1
]);
$factory('App\Category', [
    'name' => $faker->realText(10),
    'user_id' => 1
]);
$factory('App\Promotion', [
    'title' => $faker->sentence(4),
    'type' => $faker->word,
    'receipts_count' => $faker->numberBetween(5, 20),
    'money_count' => $faker->numberBetween(5, 2000),
    'business_afm' => '509645501'
]);