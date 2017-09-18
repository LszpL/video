<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(Request $request){
    	$input =  $request->input('auth');
    	$keywords =  $request->input('keywords')?$request->input('keywords'):'';
    	if(!empty($input)){
    	$data = \DB::table('users_login')->where('login_name','like','%'.$keywords.'%')->where('login_auth','=',$input)->paginate(3);
    	}else{
    		$data = \DB::table('users_login')->where('login_name','like','%'.$keywords.'%')->paginate(3);
    	}
    	// return view('admin.admin.index',['title'=>'管理员列表']);
    	return view('admin.user.index',['data'=>$data,'title'=>'用户列表','request'=>$request->all(),'input'=>$input,'keywords'=>$keywords]);
    }

    //
    public function sq($id){
    	$user=\DB::table('users_login')->where('login_id',$id)->first();
    	if($user->login_auth=='普通用户'){
    		$res = \DB::table('users_login')->where('login_id',$id)->update(['login_auth'=>'会员用户']);
    		if($res){
                $data = [
                    'status'=>0,
                    'msg'=>'修改成功'
                ];
    		// return redirect('/admin/user/index')->with(['info'=>'修改成功']);
    		}else{
                $data = [
                    'status'=>1,
                    'msg'=>'修改失败'
                ];
            }
    	}
        else{
    		$res = \DB::table('users_login')->where('login_id',$id)->update(['login_auth'=>'普通用户']);
    		if($res){
                $data = [
                    'status'=>0,
                    'msg'=>'修改成功'
                ];
            // return redirect('/admin/user/index')->with(['info'=>'修改成功']);
            }else{
                $data = [
                    'status'=>1,
                    'msg'=>'修改失败'
                ];
            }
            
    	}
return $data;
        // if($auth=='普通用户'){
        //      $res = \DB::table('users_login')->where('login_id',$id)->update(['login_auth'=>'会员用户']);
        //      // dd($res);
        //      if($res){

        //         return redirect('/admin/user/index')->with(['info'=>'修改成功']);
        //      }else{
        //             return back()->with(['info'=>'删除成功']);
        //         }
        //  }else{
        //      $res = \DB::table('users_login')->where('login_id',$id)->update(['login_auth'=>'普通用户']);
        //    if($res){

        //         return redirect('/admin/user/index')->with(['info'=>'修改成功']);
        //      }else{
        //             return back()->with(['info'=>'删除成功']);
        //         }
                
        //  }
    }
        public function fh($id){
    	// $user=\DB::table('users_login')->where('login_id',$id)->first();
    	// dd($status);
    	// if($status=='正常登录'){
    	// 	$res = \DB::table('users_login')->where('login_id',$id)->update(['login_status'=>'封号']);
    	// 	if($res){
    	// 	return redirect('/admin/user/index')->with(['info'=>'修改成功']);
    	// 	}
    	// }else{
    	// 	$res = \DB::table('users_login')->where('login_id',$id)->update(['login_status'=>'正常登录']);
    	// 	if($res){
    	// 	return redirect('/admin/user/index')->with(['info'=>'修改成功']);
    	// 	}
    	// }
        $user=\DB::table('users_login')->where('login_id',$id)->first();
        if($user->login_status=='正常登录'){
            $res = \DB::table('users_login')->where('login_id',$id)->update(['login_status'=>'封号']);
            if($res){
                $data = [
                    'status'=>0,
                    'msg'=>'修改成功'
                ];
            // return redirect('/admin/user/index')->with(['info'=>'修改成功']);
            }else{
                $data = [
                    'status'=>1,
                    'msg'=>'修改失败'
                ];
            }
        }
        else{
            $res = \DB::table('users_login')->where('login_id',$id)->update(['login_status'=>'正常登录']);
            if($res){
                $data = [
                    'status'=>0,
                    'msg'=>'修改成功'
                ];
            // return redirect('/admin/user/index')->with(['info'=>'修改成功']);
            }else{
                $data = [
                    'status'=>1,
                    'msg'=>'修改失败'
                ];
            }
            
        }
    return $data;
    }
}
