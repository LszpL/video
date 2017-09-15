<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    // 评论列表4
    public function index(Request $request)
    {

        $datas = \DB::table('videos_comment')->where('users_name','like','%'.$request->input('keywords').'%')->paginate(10);

        return view('admin.comment.index')->with(['title' => '评论列表','data' => $datas,'request' => $request->all()]);
    }

    // 删除评论
    public function delete($id)
    {
        $res = \DB::table('videos_comment')->where('comments_id',$id)->delete();
        if($res)
        {
            $data = [
                'state'=>0,
                'msg'=>'删除成功'
            ];
        }else{
            $data = [
                'state'=>1,
                'msg'=>'删除失败',
            ];
        }
        return $data;
    }
}
