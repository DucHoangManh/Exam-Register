<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Student::class, function (Faker $faker) {
    return [
    	'name' => $faker->name,
        'code' => 17000000 + $faker->numberBetween(0, 100000),
        'gender' => $faker->numberBetween(0, 1),
        'birthday' => $faker->date
    ];
});
