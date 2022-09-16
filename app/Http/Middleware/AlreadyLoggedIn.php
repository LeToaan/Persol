<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Str;
use DB;
use Illuminate\Support\Facades\Auth;

class AlreadyLoggedIn
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // if(Session()->has('id_account')&&(url('login')==$request->url()||url('register')==$request->url()
        // ||url('forget-password')==$request->url()||url('password-reset')==$request->url()
        // ||url('password-reset/{token}')==$request->url())){
        //     return back();
        // }
        if(Auth::check()&&(url('register')==$request->url()||url('forget-password')==$request->url()||url('login')==$request->url())){
            return back();
        }
        return $next($request);
    }
}
