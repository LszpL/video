<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    public function home()
    {

        return view('home.user.home');

    }

    public function message()
    {

        return view('home.user.message');

    }

    public function add()
    {

        //引入视频分类
        $type = \DB::table('videos_type')->get();
        $type = \DB::table('videos_type')->select('*', \DB::raw("concat(path,',',type_id) AS sort_path"))->orderBy('sort_path')->get();
        foreach ($type as $key => $value) {
            $num = substr_count($value->path, ',');
            $type[$key]->type_name = str_repeat('|| - ', $num) . $value->type_name;


        }
        //引入标签分类
        $label = \DB::table('videos_label')->get();
        return view('home.user.add', ['title' => '用户视频添加'], compact('type','label'));


    }

    public function comment()
    {
        return view('home.user.comment')->with('title','我的评论');
    }

    public function history()
    {
        return view('home.user.history')->with('title','观看历史');
    }


}




