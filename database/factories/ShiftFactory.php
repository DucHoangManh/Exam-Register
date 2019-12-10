<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Shift::class, function (Faker $faker) {
    return [
    	'date' => $faker->date,
    	'start' => $faker->date,
    	'end' => $faker->date,
    	'class_id' => App\Models\ClassSubject::all()->random(1)[0]->id ?? 1
    ];
});

