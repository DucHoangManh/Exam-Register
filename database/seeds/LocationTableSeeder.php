<?php

use Illuminate\Database\Seeder;

class LocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$count = 10;
        factory(App\Models\Location::class, $count)->create()->each(function ($location) {
        	for($i = 0; $i < 10; $i++) {
        		$location->room()->save(factory(App\Models\Room::class)->make());
        	}
        });
    }
}
