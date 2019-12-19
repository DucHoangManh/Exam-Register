<?php

use Faker\Generator as Faker;

$factory->define(App\Models\ClassSubject::class, function (Faker $faker) use ($factory) {
    return [
    	'code' => (App\Models\Subject::all()->random(1)[0]->code ?? 'INT').'_'.( (string) $faker->unique()->numberBetween(0,50)),
        'teacher_id' => App\Models\Teacher::all()->random(1)[0]->id ?? 1,
        'subject_id' => App\Models\Subject::all()->random(1)[0]->id ?? 1
    ];
});
