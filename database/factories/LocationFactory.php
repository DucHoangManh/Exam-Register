<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Location::class, function (Faker $faker) {
    return [
    	'name' => $faker->randomElement(['G', 'E']).$faker->numberBetween(1, 5),	
    ];
});
