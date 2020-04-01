<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //panggil halaman dashboard
    public function index(){
        return view('back.dashboard');
    }

}
