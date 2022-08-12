<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(){
	
		return view('post.create');
	}
	
	public function store(request $request){
		
		$post= new Post();
		
		$post->title=$request->title;
		$post->mensaje=$request->mensaje;
		$post->url_img=$request->url_img;
		
		$post->save();
		
		return view('welcome');
	}
}
