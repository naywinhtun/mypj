<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MissionVisions extends Model
{
    public function MissionVisions(){
    	return $this->belongsTo(MissionVisions::class);
    }
    
}
