<?php

use Faker\Generator as Faker;

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
    return [
        'username' => 'admin',
        'email' => $faker->unique()->safeEmail,
        'type' => '2',
        'password' => '$2y$10$SN5KWocLYGC6l6oF./fHmOFiIsFE7SYWJC7j47HquyoOJRThzt2em', // secret
        'remember_token' => str_random(10),
    ];
});
