<?php

use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$count = 100;
        factory(App\Models\Student::class, $count)->create()->each(function($student) {
            // $count = rand(4, 7);
            // for($i = 0; $i < $count; $i++) {
            //     $student->classes()->save(App\Models\ClassSubject::all()->random(1)[0]);
            // }
        });
    }
}
