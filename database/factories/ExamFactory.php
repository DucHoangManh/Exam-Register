<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Exam::class, function (Faker $faker) {
    return [
    	'type' => 'Học kỳ '.$faker->randomElement(['I', 'II', 'Hè']),
    	'school_year' => $faker->year($max = 'now')
    ];
});
