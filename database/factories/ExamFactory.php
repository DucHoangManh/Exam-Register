<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Exam::class, function (Faker $faker) {
    return [
    	'type' => $faker->randomElement(['I', 'II', 'Hè']),
    	'school_year' => $faker->numberBetween(2017, 2019),
    	'deadline' => $faker->dateTime()
    ];
});
