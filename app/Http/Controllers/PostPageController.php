<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostPageController extends Controller
{
    //panggil post
    public function index() {
        return view('front.post');
    }
}
