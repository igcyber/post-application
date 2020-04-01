<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //panngil semua user
    public function index(){
        $users = User::all();
        return view('back.user-list', compact('users'));
    }
}
