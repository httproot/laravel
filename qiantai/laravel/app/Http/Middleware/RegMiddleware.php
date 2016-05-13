<?php

namespace App\Http\Middleware;

use Closure;

class RegMiddleware
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
        $response = $next($request);
        // 注册成功跳转到第二注册页面
        return redirect('auth/registerDetail');
        return $response;
    }
}
