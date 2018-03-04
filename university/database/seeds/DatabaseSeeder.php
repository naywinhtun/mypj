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
        $this->call(UsersTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(CommentReplyTableSeeder::class);
        $this->call(DepartmentsTableSeeder::class);
        $this->call(MissionVisionsTableSeeder::class);
        $this->call(SyllabusTableSeeder::class);
        $this->call(HistoryTableSeeder::class);
        $this->call(PersonTableSeeder::class);
        $this->call(ProjectTableSeeder::class);
        $this->call(CurriculumTableSeeder::class);
    }
}
