<?php

use Illuminate\Database\Seeder;

class SubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$count = 30;
        factory(App\Models\Subject::class, $count)->create();
    }
}
