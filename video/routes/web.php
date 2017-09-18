<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// ====================================================后台==============================================
Route::get('admin/auth',function(){
    return view('admin.auth',['title'=>'权限限制']);
});


Route::get('admin/login','Admin\LoginController@login');

//验证码
Route::get('/code/captcha/{tmp}', 'Admin\LoginController@captcha');

Route::post('admin/dologin','Admin\LoginController@doLogin');

// ====================中间件============================
Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>['Login']],function(){
	//后台首页的路由
Route::get('index','IndexController@index');

//管理员管理模块
Route::get('admin/add','AdminController@add');
Route::post('admin/insert','AdminController@insert');
Route::get('admin/edit/{id}','AdminController@edit');
Route::post('admin/update','AdminController@update');
Route::post('admin/delete/{id}','AdminController@delete');
Route::get('admin/index','AdminController@index');
Route::get('admin/mima','AdminController@mima');
Route::post('admin/upmima','AdminController@upmima');
Route::post('admin/upload','AdminController@upload');

//用户管理模块
Route::get('user/index','UserController@index');
//会员状态
Route::post('user/sq/{id}','UserController@sq');
//账号状态
Route::post('user/fh/{id}','UserController@fh');

===================================	LMY==============================================
//后台首页	
 Route::get('index','IndexController@index');
 Route::post('index/session','IndexController@session');


 //分类模块
 Route::get('type/add','TypeController@add');
 Route::post('type/doadd','TypeController@doadd');
 Route::get('type/index','TypeController@index');
 Route::get('type/edit/{id}','TypeController@edit');
 Route::post('type/update/{id}','TypeController@update');
 Route::get('type/add_son/{id}','TypeController@add_son');	 
 Route::post('type/doadd_son','TypeController@doadd_son');
 Route::get('type/delete/{id}','TypeController@delete');	


 //标签模板
Route::get('label/add','LabelController@add');
Route::post('label/doadd','LabelController@doadd');
Route::get('label/index','LabelController@index');
Route::post('label/update','LabelController@update');
Route::post('label/delete','LabelController@delete');
Route::post('label/index','LabelController@index');

//视频模块

Route::get('video/add','VideoController@add');
Route::post('video/doadd','VideoController@doadd');
Route::post('upload','VideoController@upload');
Route::get('video/index','VideoController@index');
Route::post('video/index','VideoController@index');
Route::get('video/detail/{id}','VideoController@detail');
Route::post('video/online','VideoController@online');
Route::post('video/offline','VideoController@offline');
Route::get('video/edit/{id}','VideoController@edit');
Route::post('video/update/{id}','VideoController@update');
Route::get('video/delete/{id}','VideoController@delete');


//推荐位
Route::resource('position','PositionController');
});


// 退出
Route::get('/admin/logout','Admin\LoginController@logout');


// ===========================================前台======================================================
// 登录
Route::get('home/login','Home\LoginController@login');

//验证码
Route::get('/code/captcha/{tmp}', 'Home\LoginController@captcha');

Route::post('home/dologin','Home\LoginController@dologin');

Route::get('home/zhuce','Home\LoginController@zhuce');



//前台首页
 Route::get('/home/index/index','home\IndexController@index');

