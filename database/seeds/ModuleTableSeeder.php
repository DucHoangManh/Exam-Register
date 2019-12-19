<?php

use Illuminate\Database\Seeder;

class ModuleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$count = 30;
        factory(App\Models\Module::class, $count)->create();
    }
}
