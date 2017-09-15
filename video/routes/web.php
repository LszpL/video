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

Route::get('admin/auth',function(){
    return view('admin.auth',['title'=>'权限限制']);
});

Route::get('admin/login','Admin\LoginController@login');

//验证码
Route::get('/code/captcha/{tmp}', 'Admin\LoginController@captcha');

Route::post('admin/dologin','Admin\LoginController@doLogin');

// ====================中间件============================
Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>['Login','Auths']],function(){
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

//推荐位
Route::resource('position','PositionController');
});
// 退出
Route::get('/admin/logout','Admin\LoginController@logout');




