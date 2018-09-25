<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function tags(){
    	return $this->belongsToMany('App\Model\User\Tag', 'post_tags');
    }

    public function categories(){
    	return $this->belongsToMany('App\Model\User\Category', 'category_posts');
    }

    public function getRouteKeyName(){
    	return 'slug';
    }
}
