<?php

use Illuminate\Database\Seeder;

class CurriculumTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(App\Curriculum::class, 50)->create();
    }
}
