<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Shift::class, function (Faker $faker) {
	$type = $faker->numberBetween(1, 9);
	$start = $faker->time;

    return [
    	'date' => $faker->date,
    	'start' => $start,
    	'end' => $faker->time,
    	'code' => 'T'.$faker->numberBetween(2, 6).'-('.$type.'-'.($type+2).')'
    ];
});

