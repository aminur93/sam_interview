<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function products()
    {
        return $this->hasMany('App\Product','product_id','id');
    }
    
    public function keyword()
    {
        return $this->belongsTo('App\Keyword','keyword_id','id');
    }
}
