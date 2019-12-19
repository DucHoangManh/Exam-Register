<?php

use Illuminate\Database\Seeder;

class ExamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$count = 4;
        factory(App\Models\Exam::class, $count)->create();
    }
}
