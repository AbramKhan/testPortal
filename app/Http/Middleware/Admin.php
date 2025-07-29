<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!Auth::guard('admin')->check()){
           return redirect()->route('admin_login_page')->with('error','you are not authorized as admin');
         }
        // }elseif(!Auth::guard('admin')->check()){
        //   return  redirect()->route('admin_login_page')->with('error','you are not authorized as admin');
        // } 
        //  if(!Auth::guard('admin')->check()) {
        //     dd('inside-if');
        //     return redirect()->route('admin_Login')->with('error','you are not authorized as admin');
        // }
        // dd('after-if');
        return $next($request);
    }
}
