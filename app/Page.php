<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $guarded=[] ;
    public function categories(){
        return $this->belongsToMany('App\Category', 'page_category','page_id', 'category_id')
            ->as ('bla');
    }
}
