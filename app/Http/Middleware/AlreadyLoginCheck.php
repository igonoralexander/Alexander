<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AlreadyLoginCheck
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
         if (Session()->has('loginId') && (url('/login.php')==$request->url()|| url('/register.php')==$request->url()))
        {
            return back ();
        }
        
        return $next($request);
    }
}
