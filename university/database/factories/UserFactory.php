<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Post::class, function (Faker $faker) {

    return  [
        'department_id' => $faker->randomDigit,
        'title' => $faker->text(30),
        'content' => $faker->text(100),
        'created_user' =>$faker->randomDigit,
        'modified_user' => $faker->randomDigit,
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime(),
    ];
});

$factory->define(App\Comment::class, function (Faker $faker) {

    return  [
        'post_id' => $faker->randomDigit,
        'comment' => $faker->text(100),
        'gmail' =>$faker->safeEmail,
        'comment_date' => $faker->dateTime(),
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime(),
    ];
});

$factory->define(App\CommentReply::class, function (Faker $faker) {

    return  [
        'post_id' => $faker->randomDigit,
        'comment_id' => $faker->randomDigit,
        'content' => $faker->text(100),
        'gmail' =>$faker->safeEmail,
        'reply_date' => $faker->dateTime(),
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime(),
    ];
});

$factory->define(App\Department::class, function (Faker $faker) {

    return  [
        'name' => $faker->name,
        'head' => $faker->randomDigit,
        'subject' => $faker->randomDigit,
        'student' =>$faker->randomDigit,
        'lab' => $faker->randomDigit,
        'type'=>'academic',
        'image'=>$faker -> imageUrl(),
        'description'=>$faker -> text(2000),
        'facility'=>$faker -> text(300),
        'project_activity'=>$faker -> text(500),
        'program_offer'=>$faker -> text(300),
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime(),
    ];
});
$factory->define(App\MissionVisions::class, function (Faker $faker) {

    return  [
        'mission' => $faker->text(500),
        'vision' => $faker->text(500),
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime(),
    ];
});
$factory->define(App\History::class, function (Faker $faker) {

    return  [
        'content' => $faker->text(2000),
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime(),
    ];
});
$factory->define(App\Person::class, function (Faker $faker) {

    return  [
        'name' => $faker->name,
        'father_name' => $faker->name,
        'nrc' => '5/YaBaNa(N)12345'.$faker->randomDigit,
        'gender' => 'Male',
        'religion' => 'Buddha',
        'phonenumber' => $faker->phonenumber,
        'email' => $faker->email,
        'address' => $faker->address,
        'biography' => $faker->text(2000),
        'position_id' => $faker->randomDigit,
        'department_id' => $faker->randomDigit,
        'is_active' => $faker->randomDigit,
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime(),
        
    ];
});
$factory->define(App\Syllabus::class, function (Faker $faker) {

    return  [
        'name' => $faker->name,
        'course' => $faker->jobTitle,
        'reference'=> $faker->text(50),
        'department_id'=> $faker->randomDigit,
        'day'=>$faker->boolean(),
        'distance'=>$faker->boolean(),
        'major'=>$faker->boolean(),
        'year'=>$faker->domainWord,
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime(),
    ];
});

$factory->define(App\Project::class, function (Faker $faker) {

    return  [
        'person_id' => $faker->randomDigit,
        'department_id' => $faker->randomDigit,
        'name'=> $faker->name,
        'year'=> $faker->domainWord,
        'creator'=>'student',
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime(),
    ];
});

$factory->define(App\Curriculum::class, function (Faker $faker) {

    return  [        
        'syllabus_id' => $faker->randomDigit,
        'department_id' => $faker->randomDigit,        
        'name' => $faker->name,
        'major' => $faker->randomDigit,
        'semester' => $faker->randomDigit,
        'year' => "first",
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime(),
    ];
});