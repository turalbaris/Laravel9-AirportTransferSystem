<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\If_;

class CheckAdmin
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
        if(Auth::user()){
            $userRoles = Auth::user()->roles->pluck('name');
            //dd($userRoles);
            if (!$userRoles->contains('admin')){
                return redirect(route('adminlogin'))->with('error','You do not have permission!');
            }
            return $next($request);
        }
        else
            return redirect(route('adminlogin'))->with('error','You need to login!');
    }
}
