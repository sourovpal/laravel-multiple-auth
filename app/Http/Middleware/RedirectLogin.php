<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
         $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
           // if($guard == 'web'){
           //      return redirect()->route('user.home');
           // }
           // else if($guard == 'admin'){
           //      return redirect()->route('admin.dashboard');
           // }
           if (Auth::guard($guard)->check()) {
               return back();
            }
        }
        return $next($request);
    }
}
