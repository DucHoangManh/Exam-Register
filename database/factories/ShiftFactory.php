<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Shift::class, function (Faker $faker) {
    return [
    	'date' => $faker->date,
    	'start' => $faker->time,
    	'end' => $faker->time,
    	'class_id' => App\Models\ClassSubject::all()->random(1)[0]->id ?? 1,
    	'code' => 'T'.$faker->numberBetween(2, 6).'-('.$faker->numberBetween(1, 9).'-'.$faker->numberBetween(1, 9).')'
    ];
});

