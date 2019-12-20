<?php

use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\User::class, function (Faker $faker) {
	$username = $faker->numberBetween(15, 18) * 1000000 + $faker->unique()->numberBetween(0, 100000);
    return [
        'username' => $username,
        'email' => $username.'@vnu.edu.vn',
        'type' => '0',
        'password' => Hash::make('111111'), // secret: 111111
        'remember_token' => str_random(10),
    ];
});
