<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PushController extends Controller
{
    public function index(Request $request)
    {
        // 分类搜索 接收id
        $id = $request->only('position_id');
        if($id['position_id'] !== '0' && $id['position_id'] !==''){
            $data = \DB::table('generalizes')->where('position_id',$id)->paginate(10);
        }else{
            $data = \DB::table('generalizes')->paginate(10);
        }

        $tim = [];
        foreach($data as $k=>$v){
           $data[$k]->position_name = \DB::table('positions')->where('position_id',$v->position_id)->first()->position_name;
           $video = \DB::table('videos_data')->where('video_id',$v->video_id)->first();
           $data[$k]->video_name = $video->video_name;
           $data[$k]->video_comments = $video->video_comments;
           $data[$k]->video_count = $video->video_count;
        }
        $position = \DB::table('positions')->get();
        return view('admin.position.push.index')->with(['title'=>'推广视频列表','data'=>$data,'position'=>$position,'request'=>$request->all()]);
    }

    public function add($id)
    {
        $data = \DB::table('positions')->get();
//        dd($data);
        $video = \DB::table('videos_data')->where('video_id',$id)->first();
        return view('admin.position.push.add')->with(['title'=>'添加推广信息','data'=>$data,'video'=>$video]);
    }

    public function insert(Request $request)
    {
        $data = $request->only('video_id','position_id');
        $data['created_at'] = date('Y-m-d H:i:s',time());
        $res = \DB::table('generalizes')->insert($data);
        if($res)
        {
            return redirect('admin/position/push/index')->with('info','添加成功');
        }else{
            return redirect('admin/position/push/add/'.$data['video_id'])->with(['info'=>'添加失败']);
        }
    }
    public function delete($id)
    {
        $res = \DB::table('generalizes')->where('push_id',$id)->delete();
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

    public function edit($id,$name)
    {
        $data = \DB::table('positions')->get();
        return view('admin.position.push.edit')->with(['title'=>'编辑页','data'=>$data,'id'=>$id]);
    }

    public function update(Request $request)
    {
        $data = $request->except('_token');
        $res = \DB::table('generalizes')->where('push_id',$data['push_id'])->update(['position_id'=>$data['position_id']]);
        if($res){
            return redirect('admin/position/push/index/?position_id=0')->with(['info'=>'更新成功']);
        }else{
            return back()->with('info','更新失败');
        }
    }
}
