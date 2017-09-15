<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VipController extends Controller
{
    // vip用户列表
    public function index(Request $request)
    {
//        dd($request->all());
        $vips = \DB::table('users_vip')->where('users_name','like','%'.$request->input('keywords').'%')->paginate(10);
        return view('admin.user.vip.index')->with(['title'=>'vip列表','data'=>$vips,'request' => $request->all()]);
    }

    // 会员删除
    public function delete($id)
    {
        $res = \DB::table('users_vip')->where('vip_id',$id)->delete();
        if($res)
        {
            $data = [
                'state'=>0,
                'msg'=>'删除成功'
            ];
        }else{
            $data = [
                'state'=>1,
                'msg'=>'删除失败'
            ];
        }
        return $data;
//        if(!$res)
//        {
//            return redirect('admin/user/vip')->with(['info'=>'删除失败']);
//        }
//        return back()->with(['info'=>'删除成功']);
    }
}
