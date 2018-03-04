<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('department_id')->unsigned();
            $table->text('title');
            $table->text('content');
            $table->integer('created_user')->unsigned();
            $table->integer('modified_user')->unsigned();
//            $table->foreign('department_id')->references('id')->on('departments');
            //$table->foreign('created_user')->references('id')->on('users');
//            $table->foreign('modified_user')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
