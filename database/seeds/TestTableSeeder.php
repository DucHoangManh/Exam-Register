<?php

use Illuminate\Database\Seeder;

class TestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$count = 50;
        factory(App\Models\Test::class, $count)->create()->each(function($test){
            // $student = App\Models\Student::all()->random(1)[0];
            // $test->students()->save($student);
            // $test->register
        });
    }
}
