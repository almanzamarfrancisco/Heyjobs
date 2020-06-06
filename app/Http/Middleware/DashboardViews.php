<?php

namespace App\Http\Middleware;

use Closure;
use App\View;

class DashboardViews
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
        $views = View::all();
        view()->share('viewsGlobal', $views);
        // if( $views->pluck('route')->contains( Request::segment(1) ) )
            return $next($request);
        // return $next($request);
    }
}
