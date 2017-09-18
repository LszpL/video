<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class AdminController extends Controller
{
    public function upload(Request $request){
        //获取上传的文件对象
        $file = Input::file('file_upload');
        // dd($file);
        //判断文件是否有效
        if($file->isValid()){
            $entension = $file->getClientOriginalExtension();//上传文件的后缀名
            $newName = date('YmdHis').mt_rand(1000,9999).'.'.$entension;
            $path = $file->move(public_path().'/uploads/shangc',$newName);
            $filepath = 'uploads/shangc/'.$newName;
            //返回文件的路径
            return  $filepath;
        }
    } 
    //add
    public function add(){
    	return view('admin.admin.add',['title'=>'添加用户']);
    }

    //insert
    public function insert(Request $request){
    	// $name=$request->input('admin_name');
    	$sql = \DB::table('users_admin')->where('admin_name',$request->input('admin_name'))->first();
    	if ($sql) {
    		return back()->with(['info'=>'用户名已存在,请重新添加']);
    	}
    	else{
    	//表单验证
    	$this->validate($request,[
    		'admin_name' => 'required|min:5|max:18',
    		'admin_pwd' => 'required|min:5|max:18',
    		're_pwd' => 'same:admin_pwd',
    		'admin_face' => 'image',
    		],[
    		'admin_name.required'=>'用户名不能为空',
    		'admin_name.min'=>'用户名不能少于5位',
    		'admin_name.max'=>'用户名不能多于18位',
    		'admin_pwd.required'=>'密码不能为空',
    		'admin_pwd.min'=>'密码不能少于5位',
    		'admin_pwd.max'=>'密码不能多于18位',
    		're_pwd.same'=>'确认密码不一致',
    		'admin_face.image'=>'请上传图片格式',
    		]);
        // 没有除去admin_face因为后面替换取代了
    	$data = $request->except('_token','re_pwd');
        // dd($data);
    	//密码处理
    	$data['admin_pwd'] = encrypt($data['admin_pwd']);

    	//上传图片
    	if($request->hasFile('admin_face')){
    		if($request->file('admin_face')->isValid()){
    			//移动文件
    			$ext = $request->file('admin_face')->getClientOriginalExtension();
    			//文件名称
    			$filename = time().mt_rand(1000000,9999999).'.'.$ext;
    			//移动
    			$request->file('admin_face')->move('./uploads',$filename);
    			//修改pic数据
    			$data['admin_face'] = $filename;
    		}
    	}
    	// $data['remember_token'] = str_random(50);
    	$time = date('Y-m-d H:i:s',time());
    	$data['admin_time'] = $time;
    	// dd($data);
    	//执行添加数据库
    	$res=\DB::table('users_admin')->insert($data);
    	if($res)
    	{
    		return redirect('/admin/admin/index')->with(['info'=>'添加成功']);
    	}else{
    		return back()->with(['info'=>'添加失败']);
    	}
    }
    }
    public function index(Request $request){
    	$input =  $request->input('auth');
    	// dd($request['->all()']);
    	$keywords =  $request->input('keywords')?$request->input('keywords'):'';
    	if(!empty($input)){
    	$data = \DB::table('users_admin')->where('admin_name','like','%'.$keywords.'%')->where('admin_auth','=',$input)->paginate(3);
    	}else{
    		$data = \DB::table('users_admin')->where('admin_name','like','%'.$keywords.'%')->paginate(3);
    	}
    	if(empty($request['page'])){
    		$request['page']=1;
    	}
    	// dd($request->all());
    	// dd($data);
    	// return view('admin.admin.index',['title'=>'管理员列表']);
    	return view('admin.admin.index',['data'=>$data,'title'=>'管理员列表','request'=>$request->all(),'input'=>$input,'keywords'=>$keywords]);
    }

    public function edit($id){
    	$user=\DB::table('users_admin')->where('admin_id',$id)->first();
    	return view('admin.admin.edit',['title'=>'编辑管理员','user'=>$user,'page'=>$_GET['page']]);
    }
    public function update(Request $request){
    	// dd($request->input('page'));
    	// $sql = \DB::table('users_admin')->where('admin_name',$request->input('admin_name'))->first();
    	// if ($sql) {
    	// 	return back()->with(['info'=>'用户名已存在,请重新修改']);
    	// }
    	// dd($request->all());
    	//表单验证
    	$this->validate($request,[
    		'admin_name' => 'required|min:5|max:18',
    		'admin_face' => 'image',
    		],[
    		'admin_name.required'=>'用户名不能为空',
    		'admin_name.min'=>'用户名不能少于5位',
    		'admin_name.max'=>'用户名不能多于18位',
    		'file_upload.image'=>'请上传图片格式',
    		]);
    	$id = $request->input('admin_id');
        // dd($request->all());
    	$data = $request->except('_token','admin_id','page','art_thumb','file_upload');
    	//上传图片
    	if($request->hasFile('file_upload')){
    		if($request->file('file_upload')->isValid()){
    			//查询头像路径
    			$oldPic = \DB::table('users_admin')->where('admin_id',$id)->first()->admin_face;
    			// dd($oldPic);
    			// if(file_exists('./uploads/'.$oldPic)){
    			// unlink('./uploads/'.$oldPic);
    			// }
    			if(!empty($oldPic)){
    				unlink('./uploads/'.$oldPic);
    			}
    			//移动文件
    			$ext = $request->file('file_upload')->getClientOriginalExtension();
    			//文件名称
    			$filename = time().mt_rand(1000000,9999999).'.'.$ext;
    			//移动
    			$request->file('file_upload')->move('./uploads',$filename);
    			//修改pic数据
    			$data['admin_face'] = $filename;
    		}
    	}

    	$res = \DB::table('users_admin')->where('admin_id',$id)->update($data);
    	$user = \DB::table('users_admin')->where('admin_id',$id)->first();
    	// dd($res);
    	if($res)
    	{
    		if(session('user')->admin_name==$user->admin_name){
    		// unset(session('user')->admin_face);
    		session('user')->admin_face = $user->admin_face;
    		}
    		// dd(session('user')->admin_face);
    		return redirect('/admin/admin/index?page='.$request->input('page'))->with(['info'=>'修改成功']);
    	}else{
    		return back()->with(['info'=>'修改失败']);
    	}
    }
    public function delete($id){
    	$res=\DB::table('users_admin')->where('admin_id',$id)->delete();
    	if(!$res)
    	{
    		// return redirect('/admin/admin/index')->with(['info'=>'删除失败']);
    		$data=[
    			'status'=>'1',
    			'msg'=>'删除失败'
    		];
    	}else{
    		// return back()->with(['info'=>'删除成功']);
    		$data=[
    			'status'=>'0',
    			'msg'=>'删除成功'
    		];
    	}	
    	return $data;
    }
    public function mima(){
    	return view('admin.admin.mima',['title'=>'修改密码']);
    }
    public function upmima(Request $request){
    	// dd($request->all());
    	$id=session('user')->admin_id;
    	$this->validate($request,[
    		'admin_opwd' => 'required|between:5,18',
    		'admin_pwd' => 'required|between:5,18',
    		're_pwd' => 'required|same:admin_pwd',
    		],[
    		'admin_opwd.required'=>'原密码不能为空',
    		'admin_opwd.between'=>'原密码必须在5-18位',
    		'admin_pwd.required'=>'新密码不能为空',
    		'admin_pwd.between'=>'新密码必须在5-18位',
    		're_pwd.required'=>'确认密码不能为空',
    		're_pwd.same'=>'确认密码不一致',
    		]);
    	$data = \DB::table('users_admin')->where('admin_id',$id)->first();
    	$pwd=decrypt($data->admin_pwd);
    	// dd($pwd);
    	// dd($request['admin_opwd']);
    	if($request['admin_opwd']!=$pwd){
    		return back()->with(['info'=>'原密码有误,请重新修改']);
    	}
    	if($request['admin_opwd']==$request['admin_pwd']){
    		return back()->with(['info'=>'原密码不能与新密码一致,请重新修改']);
    	}
    	$user = $request->except('admin_opwd','re_pwd','_token');
    	$user['admin_pwd'] = encrypt($user['admin_pwd']);
    	$res = \DB::table('users_admin')->where('admin_id',$id)->update($user);
    	if($res){
    		$request->session()->forget('user');
    		\Session::forget('user');
    		return redirect('/admin/login')->with(['info'=>'修改成功,请重新登录']);
    	}else{
    		return back()->with(['info'=>'修改失败,请重新修改']);
    	}
    }
}
