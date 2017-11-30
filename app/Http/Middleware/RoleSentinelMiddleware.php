<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel,Session;
use Redirect;

class RoleSentinelMiddleware
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
       if (Sentinel::inRole('low') && Sentinel::getUser()->hasAccess([$request->route()->getName()])) {
            return $next($request);
        } elseif(Sentinel::getUser()->hasAccess('admin')) {
            return $next($request);
        } else {
            Session::flash('error', 'You dont have privilege');
            return Redirect::to('/details');
    }
    }
}
