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
 //后台首页	
 Route::get('/admin/index','admin\IndexController@index');


 //分类模块
 Route::get('/admin/type/add','admin\TypeController@add');
 Route::post('admin/type/doadd','admin\TypeController@doadd');
 Route::get('admin/type/index','admin\TypeController@index');
 Route::get('admin/type/edit/{id}','admin\TypeController@edit');
 Route::post('admin/type/update/{id}','admin\TypeController@update');
 Route::get('admin/type/add_son/{id}','admin\TypeController@add_son');	 
 Route::post('admin/type/doadd_son','admin\TypeController@doadd_son');
 Route::get('admin/type/delete/{id}','admin\TypeController@delete');	


 //标签模板
Route::get('/admin/label/add','admin\LabelController@add');
Route::post('admin/label/doadd','admin\LabelController@doadd');
Route::get('admin/label/index','admin\LabelController@index');
Route::post('admin/label/update','admin\LabelController@update');
Route::post('admin/label/delete','admin\LabelController@delete');
Route::post('admin/label/index','admin\LabelController@index');

//视频模块

Route::get('/admin/video/add','admin\VideoController@add');
Route::post('admin/video/doadd','admin\VideoController@doadd');
Route::post('/admin/upload','admin\VideoController@upload');
Route::get('admin/video/index','admin\VideoController@index');
Route::post('admin/video/index','admin\VideoController@index');
Route::get('admin/video/detail/{id}','admin\VideoController@detail');



//推广模块
//

