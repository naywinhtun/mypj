<?php

namespace App;

use Carbon\Carbon;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
     'title',
     'body',
     'published_at',
     'user_id'
    ];

    public function scopePublished($query)
    {
       $query->where('published_at','<=',Carbon::now());
    }

    public function scopeUnpublished($query)
    {
       $query->where('published_at','>',Carbon::now());
    }

    public function setPublishedAtAttribute($date)
    {
    	$this->attributes['published_at'] = Carbon::parse($date);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }


}
