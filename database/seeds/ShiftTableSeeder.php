<?php

use Illuminate\Database\Seeder;

class ShiftTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$count = 50;
        factory(App\Models\Shift::class, $count)->create()->each(function($shift){
            $shift->room()->save(App\Models\Room::all()->random(1)[0]);
        });
    }
}
