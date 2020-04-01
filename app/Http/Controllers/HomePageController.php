<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomePageController extends Controller
{
    //panggil halaman home
    public function index() {
        $posts = Post::latest()->limit(6)->get(); //panggil job terbaru 10 biji
        return view('front.home', compact('posts'));
    }
}
