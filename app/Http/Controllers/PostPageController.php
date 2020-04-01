<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;

class PostPageController extends Controller
{
    // panggil post
    public function index() {
        $posts = Post::all();
        return view('back.post-list', compact('posts'));
    }

    public function show($id, Post $post){
        return view('front.post-show', compact('post'));
    }

}
