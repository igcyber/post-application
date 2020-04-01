<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    //panggil semua comment dari user
    public function index() {
        $comments = Comment::all();
        return view('back.comment-list', compact('comments'));
    }

}
