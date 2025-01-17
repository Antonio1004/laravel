<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::all();
        return view("blog", ["posts" => $posts]);
    }

    public function show($post){
        $post=Post::findOrFail($post);
        return view('detail',['post'=>$post]);
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){
        $post=new Post;
        $post->title=$request->input('title');
        $post->body=$request->input('body');
        $post->save();

        session()->flash('status','Post create!');
        return to_route('blog');
    }
}