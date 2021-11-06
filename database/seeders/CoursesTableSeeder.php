<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Course::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 20; $i++) { 
            Course::create([ 
            'course_id'=> $faker->unique()->randomNumber,
            'teacher' => $faker->name,
            'teachers_mail'=>$faker->email,
            'publisher'=>'admin1',
            'url'=>$faker->url



            ]);
            }
    
    }
}
