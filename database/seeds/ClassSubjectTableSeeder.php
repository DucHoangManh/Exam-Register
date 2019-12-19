<?php

use Illuminate\Database\Seeder;

class ClassSubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$count = 30;
        factory(App\Models\ClassSubject::class, $count)->create()->each(function($class) {
            $quantity = rand(30, 40);
            for($i = 0; $i < $quantity; $i++) {
                $class->student()->save(App\Models\Student::all()->random(1)[0]);
            }
        });
    }
}
