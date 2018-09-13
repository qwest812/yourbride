<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $guarded=[] ;
    public function pages(){
        return $this->belongsToMany('App\Good', 'page_category', 'category_id','page_id');
    }
}
