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

$factory->define(App\Models\Room::class, function (Faker $faker) {
    return [
        'name' => $faker->numberBetween(1, 5).'0'.$faker->numberBetween(1, 9),
        'location_id' => App\Models\Location::all()->random(1)[0]->id ?? 1,
        'computer_quantity' => $faker->numberBetween(15, 40)
    ];
});
