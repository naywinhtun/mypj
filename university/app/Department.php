<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{   

	public function  departmentHead()
    {

    	return $this->belongsTo(Person::class,'head');
    	
    }
    
    //get each department teacher list.
    public function  teacherLists()
    {

    	return $this->hasMany(Person::class);
    	
    }

    public function latestPosts(){

    	return $this->hasMany(Post::class);
    	
    }

    public function projectLists(){

        return $this->hasMany(Project::class)->where('creator','student');
        
    }

    public function syllabi(){

        return $this->hasMany(Syllabus::class);
        
    }

    public function departmentDayYear(){

        return $this->syllabi()->where('day',1);
        
    }

}
