<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
    public function  user()
    {

    	return $this->belongsTo(User::class,'created_user');
    	
    }

    public function  department()
    {

    	return $this->belongsTo(Department::class);
    	
    }

    public function comments()
    {

        return $this->hasMany(Comment::class);
    }
}
