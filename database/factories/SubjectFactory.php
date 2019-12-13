<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Subject::class, function (Faker $faker) use ($factory) {
    return [
    	'name' => $faker->company,
        'credit' => $faker->numberBetween(2,5),
        'code' => substr(strtoupper($faker->word), 0, 3)
    ];
});
