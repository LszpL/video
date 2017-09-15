<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Gregwar\Captcha\CaptchaBuilder; 
use Gregwar\Captcha\PhraseBuilder;
use Illuminate\Support\Facades\Validator;
use App\User;
use Illuminate\Support\Facades\Crypt;


class LoginController extends Controller
{
    public function login(){
    	// dd(encrypt(123456));
    	return view('admin.login',['title'=>'后台登录']);
    }

    // 验证码生成
	public function captcha($tmp)
	{
	    $phrase = new PhraseBuilder;
	    // 设置验证码位数
	    $code = $phrase->build(4);
	    // 生成验证码图片的Builder对象，配置相应属性
	    $builder = new CaptchaBuilder($code, $phrase);
	    // 设置背景颜色
	    $builder->setBackgroundColor(255,250,250);
	    $builder->setMaxAngle(25);
	    $builder->setMaxBehindLines(0);
	    $builder->setMaxFrontLines(0);
	    // 可以设置图片宽高及字体
	    $builder->build($width = 100, $height = 42, $font = null);
	    // 获取验证码的内容
	    $phrase = $builder->getPhrase();
	    // 把内容存入session
	    \Session::flash('code', $phrase);
	    // 生成图片
	    header("Cache-Control: no-cache, must-revalidate");
	    header("Content-Type:image/jpeg");
	    $builder->output();
	}
	//登录执行逻辑
	public function doLogin(Request $request){
		// dd(encrypt(123456));
		$input = $request->except('_token');
		// dd($input);
		//接受表单提交的数据第二种方法使用Input，使用前必须use
//        $input = Input::all();
//        dd($input);
//        2 做表单验证
//        "username" => "zhangsan"
//        "password" => "111111"
//        "code" => "35sl"
//        Validator::make(参数1，参数2，参数3)
//        参数1：需要被验证的数据
//        参数2：设置验证规则
//        参数3：错误提示信息
        $rule = [
            'username'=>'required|between:5,18',
            'password'=>'required|between:5,18',
            'code'=>'required|between:4,4',
        ];
        $msg = [
            'username.required'=>'用户名必须输入',
            'username.between'=>'用户名必须在5-18位',
            'password.required'=>'密码必须输入',
            'password.between'=>'密码必须在5-18位',
            'code.required'=>'验证码必须输入',
            'code.between'=>'验证码必须是4位',
        ];
		$validator = Validator::make($input,$rule,$msg);
		//如果验证失败
		if($validator->fails()){
			return redirect('admin/login')
				->withErrors($validator)
				->withInput();
		}
		//        3 做逻辑判断 用户名是否存在  密码是否正确  验证码是否正确
		$user = User::where('admin_name',$input['username'])->first();
		// dd($user);
		if(!$user){
            return back()->with(['info'=>'无此用户，请确认用户名是否正确'])->withInput();
        }
        // 判断密码是否正确
        if(Crypt::decrypt($user->admin_pwd) != $input['password']){
            return back()->with(['info'=>'密码错误'])->withInput();
        }
        //        判断验证码
        if(session('code') != $input['code']){
            return back()->with(['info'=>'验证码错误'])->withInput();
        }
        //         4 如果验证通过，将用户信息写入session,作为用户登录标志
        session(['user'=>$user]);
        // 5 跳转到后台首页
        return redirect('admin/index');
	}

	//退出
	public  function logout(Request $request){
    	// dd(111);
    	//清除session
    	$request->session()->forget('user');
    	\Session::forget('user');

    	//跳转
    	return redirect('/admin/login')->with(['info'=>'登出成功']);
    }
}
