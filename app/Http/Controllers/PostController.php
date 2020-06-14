<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{

    public function newPost(Request $request){
    	if(auth('provider')->user())
            $auth = auth('provider')->user();
        if(auth()->user())
            $auth = auth()->user();
        if(!$auth)
            return redirect('/home');
    	$request->validate([
    		"content" => "string",
    		"title" => "string" 
    	]);
    	
    	Post::create([
    		'provider_id' => $auth->id,
    		'title' => $request->title,
    		'content' => $request->content,
    	]);
    	return back();
    }
}
