<?php

namespace App\Http\Middleware;

use App\Http\Controllers\NewController;
use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRoleUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role=null, $number=null)
    {

        if (Auth::check()) {

            if ((!is_null($role) && $role!=='admin')) die ('the middleware is aware of non admin users: '.$role);

        }


        return $next($request);
    }
}
