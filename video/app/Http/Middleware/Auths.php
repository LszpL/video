<?php

namespace App\Http\Middleware;

use Closure;

class Auths
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
       $route = \Route::current()->getActionName();
       if(session('user')->admin_auth=='超级管理员'){
            $arr=['App\Http\Controllers\Admin\IndexController@index',
            'App\Http\Controllers\Admin\AdminController@add',
            'App\Http\Controllers\Admin\AdminController@insert',
            'App\Http\Controllers\Admin\AdminController@index',
            'App\Http\Controllers\Admin\AdminController@edit',
            'App\Http\Controllers\Admin\AdminController@update',
            'App\Http\Controllers\Admin\AdminController@delete',
            'App\Http\Controllers\Admin\AdminController@mima',
            'App\Http\Controllers\Admin\AdminController@upmima',
            'App\Http\Controllers\Admin\AdminController@upload',
            'App\Http\Controllers\Admin\UserController@index',
            'App\Http\Controllers\Admin\UserController@sq',
            'App\Http\Controllers\Admin\UserController@fh'];
       }else{
            $arr = ['App\Http\Controllers\Admin\UserController@index'];
       }
       $user = \DB::table('users_admin')->where('admin_id',session('user')->admin_id)->first()->admin_auth;
       session('user')->admin_auth=$user;
       if(in_array($route,$arr)){
             return $next($request);
         }else{
             //        四  如果用户没有权限，返回一个提示没有权限的页面
             return redirect('admin/auth');
         }
        return $next($request);
    }
}
