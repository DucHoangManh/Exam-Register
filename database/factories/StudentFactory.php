<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Student::class, function (Faker $faker) use ($factory) {
    return [
    	'name' => $faker->name,
        'code' => factory(App\Models\User::class)->create()->username,
        'gender' => $faker->numberBetween(0, 1),
        'birthday' => $faker->date
    ];
});
