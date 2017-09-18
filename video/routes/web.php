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


Route::get('/admin','Admin\IndexController@index');

 //评论列表路由
Route::get('/admin/comment','Admin\CommentController@index');
 // 评论删除路由
Route::post('/admin/comment/delete/{id}','Admin\CommentController@delete');

// vip用户列表路由
Route::get('/admin/user/vip','Admin\VipController@index');

Route::post('/admin/user/vip/delete/{id}','Admin\VipController@delete');

// 友情链接
// 连接列表
Route::get('/admin/link','Admin\LinkController@index');

// 更新信息
Route::post('/admin/link/update','Admin\LinkController@update');
// 删除
Route::post('/admin/link/delete/{id}','Admin\LinkController@delete');

// 添加
Route::get('/admin/link/add','Admin\LinkController@add');
Route::post('/admin/link/insert','Admin\LinkController@insert');

// 推广
Route::get('/admin/position/push/index','Admin\PushController@index');
Route::get('/admin/position/push/add/{id}','Admin\PushController@add');
Route::post('/admin/position/push/insert','Admin\PushController@insert');
Route::post('/admin/position/push/delete/{id}','Admin\PushController@delete');
Route::get('/admin/position/push/edit/{id}/{name}','Admin\PushController@edit');
Route::post('/admin/position/push/update','Admin\PushController@update');


// 前台
Route::get('/home/user/comment','Home\UserController@comment');
Route::get('/home/user/history','Home\UserController@history');