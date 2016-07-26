<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;

class PostController extends Controller
{
	public function getDashboard(){
		$posts = Post::all(); //get all posts
		return view('dashboard', ['posts'=>$posts]);
	}


    public function postCreatePost(Request $request){
    	//validation
    	$this->validate($request, [
    		'body' => 'required|max:1000'
    	]);
    	$post = new Post();
    	$post->body = $request['body'];
    	$message ='There was an error';
    	if($request->user()->posts()->save($post)){
    		$message ='Post successfully created';
    	}
    	return redirect()->route('dashboard')->with(['message'=>$message]);
    }

    //delete post
    public function getDeletePost($post_id){
    	$post = Post::where('id',$post_id)->first();
    	// $post = Post::find($post_id)->first();
    	$post->delete();
    	return redirect()->route('dashboard')->with(['message'=>'Successfully deleted!']);
    }
}
