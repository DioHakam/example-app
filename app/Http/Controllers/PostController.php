<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    //
    public function index(){

        $post = Post::with(['user','category'])->get();
        return view('posts',[
            'posts'=>$post,
            'page' =>'post'
        ]);

    }

    public function show(Post $post){
        // $singlepost = Post::where('slug',$slug)->first();
        return view('singlePost',[
            'post' => $post->load('user', 'user'),
            'page'  => 'post'
        ]);
    }

}
