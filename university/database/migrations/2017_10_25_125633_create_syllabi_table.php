<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSyllabiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('syllabi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->longText('course');
            $table->longText('reference');
            $table->integer('department_id')->unsigned();
           /* $table->foreign('department_id')->references('id')->on('departments');*/
            $table->boolean('day');
            $table->boolean('distance');
            $table->boolean('major');
            $table->string('year');
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
        Schema::dropIfExists('syllabi');
    }
}
