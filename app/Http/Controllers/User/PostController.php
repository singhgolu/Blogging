<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User\Post;

class PostController extends Controller
{
	/*public function post(Post $post)---->we r going to get POST according to slug*/
    public function post(Post $post){
    	//return $slug;
    	return view('user.post', compact('post'));
    }
}
