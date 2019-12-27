<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Exam::class, function (Faker $faker) {
	$school_year = $faker->numberBetween(2014, 2019);
    return [
    	'type' => $faker->randomElement(['I', 'II', 'Hè']),
    	'school_year' => $school_year.'-'.($school_year+1),
    	'deadline' => $faker->dateTime()
    ];
});
