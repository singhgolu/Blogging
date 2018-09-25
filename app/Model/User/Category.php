<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function tags(){
    	return $this->belongsToMany('App\Model\User\Tag', 'category_posts');
    }

    public function posts(){
    	return $this->belongsToMany('App\Model\User\Post', 'category_posts')->orderBy('created_at', 'DESC')->paginate(5);
    }

    public function getRouteKeyName(){
    	return 'slug';
    }
}
