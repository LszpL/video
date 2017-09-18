<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Psy\Util\Json;

class LinkController extends Controller
{
    //
    public function index(Request $request)
    {
        $data = \DB::table('friend_links')->where('link_name','like','%'.$request->input('keywords').'%')->paginate(10);
        return view('admin.link.index')->with(['title'=>'友情链接','data'=>$data,'request' => $request->all()]);
    }

    public function update(Request $request)
    {
        $data = $request->except('_token');
        $datas = $request->except('_token','id');
        $time = date('Y-m-d H:i:s',time());
        $res = \DB::table('friend_links')->where('friend_id',$data['id'])->update(['link_name'=>$data['link_name'],'url'=>$data['url'],'updated_at'=>$time]);
        if($res)
        {
            $data = 0;
        }else{
            $data = 1;
        }
        echo $data;
    }

    public function delete($id)
    {
        $res = \DB::table('friend_links')->where('friend_id',$id)->delete();
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

    public function add()
    {
        return view('admin.link.add')->with('title','添加链接');
    }

    public function insert(Request $request)
    {
        $data = $request->except('_token');
        $data['created_at'] = date('Y-m-d H:i:s',time());
        $data['updated_at'] = date('Y-m-d H:i:s',time());

        $this->validate($request, [
            'link_name' => 'required',
            'url' => 'required',
        ],[
            'link_name.required' => '不能为空',
            'url.required' => '不能为空',
            ]);

        $res = \DB::table('friend_links')->insert($data);
        if($res)
        {
            $data = [
                'state'=>0,
                'msg'=>'添加成功'
            ];
        }else{
            $data = [
                'state'=>1,
                'msg'=>'添加失败',
            ];
        }
        return $data;
        /*if($res)
        {
            return redirect('admin/link')->with(['info'=>'添加成功']);
        }else{
            return back()->with(['info'=>'添加失败']);
        }*/
    }
}