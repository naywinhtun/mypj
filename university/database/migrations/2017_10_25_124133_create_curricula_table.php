<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurriculaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curricula', function (Blueprint $table) {
         $table->increments('id');
         $table->integer('syllabus_id')->unsigned();
         $table->integer('department_id')->unsigned();          
         $table->string('name');         
         $table->integer('major');
         $table->integer('semester');
         $table->string('year');
         /*$table->foreign('module_id')->references('id')->on('day_syllabi');*/
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
        Schema::dropIfExists('curricula');
    }
}
