<?php

use Illuminate\Database\Seeder;

class SyllabusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Syllabus::class, 16)->create();
    }
}
