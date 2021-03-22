<?php

namespace App\Http\Middleware;

use App\Models\User;
use \Closure;

class SetUserResolver
{
    /**
     * 解析请求中的User(注意不是Admin).
     *
     * @param \Illuminate\Http\Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = User::findOrFail(1);

        $request->merge(['user' => $user]);
        $request->setUserResolver(function () use ($user) {
            return $user;
        });

        return $next($request);
    }
}
