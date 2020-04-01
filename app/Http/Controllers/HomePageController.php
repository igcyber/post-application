<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    //panggil halaman home
    public function index() {
        return view('front.home');
    }
}
