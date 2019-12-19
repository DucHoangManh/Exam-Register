<?php

use Faker\Generator as Faker;

$factory->define(App\Models\ClassSubject::class, function (Faker $faker) use ($factory) {
	$module = App\Models\Module::all()->random(1)[0];
    return [
    	'code' => ($module->subject->code ?? 'INT').'_'.( (string) $faker->unique()->numberBetween(0,50)),
        'teacher_id' => App\Models\Teacher::all()->random(1)[0]->id ?? 1,
        'module_id' => $module->id ?? 1
    ];
});
