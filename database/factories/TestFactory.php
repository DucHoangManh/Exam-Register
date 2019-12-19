<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Test::class, function (Faker $faker) use ($factory) {
    return [
    	'shift_id' => App\Models\Shift::all()->random(1)[0]->id ?? 1,
        'room_id' => App\Models\Room::all()->random(1)[0]->id ?? 1,
        'class_id' => App\Models\Room::all()->random(1)[0]->id ?? 1,
    ];
});
