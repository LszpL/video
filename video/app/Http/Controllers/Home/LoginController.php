<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder; 
use Gregwar\Captcha\PhraseBuilder;

class LoginController extends Controller
{
    public function login(){
    	// dd(111);
    	return view('home.login',['title'=>'芭拉芭拉-登录界面']);
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
    public function dologin(Request $request){
    	// dd($request->all());
    	$input = $request->except('_token');
    	$rule = [
            'login_name'=>'required',
            'login_pwd'=>'required',
            'code'=>'required',
        ];
        $msg = [
            'login_name.required'=>'用户名必须输入',
            'login_pwd.required'=>'密码必须输入',
            'code.required'=>'验证码必须输入',
        ];
		$validator = \Validator::make($input,$rule,$msg);
		//如果验证失败
		if($validator->fails()){
			return redirect('home/login')
				->withErrors($validator)
				->withInput();
		}
		// dd($input);
		$user = \DB::table('users_login')->where('login_name',$input['login_name'])->first();
		// dd($user);
		if(!$user||decrypt($user->login_pwd) != $input['login_pwd']){
            return back()->with(['info'=>'用户名或密码错误'])->withInput();
        }
        //        判断验证码
        if(session('code') != $input['code']){
            return back()->with(['info'=>'验证码错误'])->withInput();
        }
        //         4 如果验证通过，将用户信息写入session,作为用户登录标志
        session(['user'=>$user]);
        // 5 跳转到后台首页
        return redirect('home/index');       
    }

    public function zhuce(){
    	return view('home.zhuce',['title'=>'芭拉芭拉-注册页面']);
    }

}
