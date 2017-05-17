<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Redirect;

class AdminMiddleware
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
        if(! (Auth::check() && Auth::user()->is_admin) ){
            return Redirect::back()->withErrors(["You do not have permission to view this page"]);
        }

        return $next($request);
    }
}
