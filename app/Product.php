<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function keyword()
    {
        return $this->belongsTo('App\Keyword','keyword_id','id');
    }
    
    public function comment()
    {
        return $this->belongsTo('App\Comment','product_id','id');
    }
}
