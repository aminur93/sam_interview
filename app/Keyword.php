<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
    public function products()
    {
        return $this->hasMany('App\Products','keyword_id','id');
    }
    
    public function comments()
    {
        return $this->hasMany('App\Comment','keyword_id','id');
    }
}
