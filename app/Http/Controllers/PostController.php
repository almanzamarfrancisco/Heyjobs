<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{

    public function newPost(Request $request){
    	if(!auth()->user())
    		return redirect('login');
    	$request->validate([
    		"content" => "string",
    		"title" => "string" 
    	]);
    	
    	Post::create([
    		'user_id' => auth()->user()->id,
    		'title' => $request->title,
    		'content' => $request->content,
    	]);
    	return back();
    }
}
