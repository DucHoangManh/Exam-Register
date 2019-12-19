<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Shift::class, function (Faker $faker) {
	$type = $fake->numberBetween(1, 9);
	$start = $faker->time;

    return [
    	'class_id' => App\Models\ClassSubject::all()->random(1)[0]->id ?? 1,
    	'student_id' => App\Models\Student::all()->random(1)[0]->id ?? 1,
    	'test_id' => App\Models\Test::all()->random(1)[0]->id ?? 1,
    	'class_id' => App\Models\ClassSubject::all()->random(1)[0]->id ?? 1,
    	'code' => 'T'.$faker->numberBetween(2, 6).'-('.$type.'-'.($type+2).')'
    ];
});

