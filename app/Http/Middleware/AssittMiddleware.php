<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AssittMiddleware
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
        if (Auth::check() && Auth::user()->is_admin=="assitt" )
        {
            return $next($request);
        }else
        {
            return redirect ('/');
        }

    }
}
