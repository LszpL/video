<?php

namespace App\Http\Middleware;

use Closure;

class Login
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

        //如果用户没有登录
        if(!session('user')){
            return redirect('admin/login')->with(['info'=>'请注意素质!!必须通过登录页面才能进入后台首页']);
        }

        return $next($request);
    }
}
