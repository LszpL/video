<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function comment()
    {
        return view('home.user.comment')->with('title','我的评论');
    }

    public function history()
    {
        return view('home.user.history')->with('title','观看历史');
    }
}
