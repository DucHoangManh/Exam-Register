<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Module::class, function (Faker $faker) use ($factory) {
    return [
        'exam_id' => App\Models\Exam::all()->random(1)[0]->id ?? 1,
        'subject_id' => App\Models\Subject::all()->random(1)[0]->id ?? 1
    ];
});
