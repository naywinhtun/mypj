<?php

use Illuminate\Database\Seeder;

class MissionVisionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\MissionVisions::class, 1)->create();
    }
}
