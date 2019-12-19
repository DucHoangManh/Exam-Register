<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'admin',
	        'email' => 'admin@a.a',
	        'type' => '2',
	        'password' => '$2y$10$SN5KWocLYGC6l6oF./fHmOFiIsFE7SYWJC7j47HquyoOJRThzt2em', // secret: 111111
	        'remember_token' => str_random(10),
        ]);
        $this->call([
            ExamTableSeeder::class,
            SubjectTableSeeder::class,
            ModuleTableSeeder::class,
            TeacherTableSeeder::class,
            LocationTableSeeder::class,
            RoomTableSeeder::class,           
        	StudentTableSeeder::class,
            ClassSubjectTableSeeder::class,
            ShiftTableSeeder::class,
            TestTableSeeder::class 
        ]);

    }
}
