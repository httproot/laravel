<?php

namespace App\Http\Middleware;

use App\User;
use Closure;

class LoginMiddleware
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
        $user = User::find($request->user()->uid);
        // 新用户注册
        $user->lastlogin = time();
        $user->save();
        return $response;

    }
}
