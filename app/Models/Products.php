<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
    	'title', 'price', 'image','desc', 'category_id'
    ];
    public function comments(){
    	return $this->hasMany('App\Comments', 'post_id');
    }
    public function likes(){
    	return $this->hasMany('App\Likes', 'post_id');
    }
}
