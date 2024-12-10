<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Admin;

class AdminMiddleware
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
        if (session()->has('AdmLogId')) {
            $admin = Admin::where('id', '=', session()->get('AdmLogId'))->first();
            View::share('admin', $admin); // Share admin data globally
            return $next($request);
        }
        return redirect()->route('admin.login');
    }
}
