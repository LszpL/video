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

 Route::get('/', function () {
     return view('welcome');
 });

//后台
Route::get('/admin','Admin\IndexController@index');
//个人用户视频上传列表
Route::get('/admin/upload/index','Admin\UploadController@index');
Route::get('/admin/upload/finish/{id}','Admin\UploadController@finish');
Route::get('/admin/upload/defeated/{id}','Admin\UploadController@defeated');
Route::get('/admin/upload/delete/{id}','Admin\UploadController@delete');
//个人用户用户视频添加
Route::get('/admin/upload/add','Admin\UploadController@add');
Route::post('/admin/upload/video','Admin\UploadController@video');
Route::post('/admin/upload/insert','Admin\UploadController@insert');

//网站配置模块的路由
Route::resource('/admin/config','Admin\ConfigController');


//前台个人中心
//前台首页
Route::get('/home/user/home','Home\UserController@home');
//首页个人信息
Route::get('/home/user/message','Home\UserController@message');
//首页上传
Route::get('/home/user/add','Home\UserController@add');
Route::post('/home/user/video','Home\UploadController@video');
Route::post('/home/user/upload','Home\UploadController@upload');
Route::get('/home/user/myupload','Home\UploadController@myupload');
//Route::get('/home/user/face','Home');


//上传管理


//我的上传


