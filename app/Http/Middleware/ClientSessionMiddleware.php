<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;

class ClientSessionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(!Auth::user() OR Auth::user()->user_role != 2){
            return redirect('/');
        }
        return $next($request);
    }
}
