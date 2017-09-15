<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //后台主页

	public function index() {

		$data = \DB::table('videos_data')->where('video_name','like','%'.$request->input('keyword').'%')->paginate($request->input('count',5));
		

		return view('admin.index.index',['title'=>'后台首页','data'=>$data]);

	}

}
