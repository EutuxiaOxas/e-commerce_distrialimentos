<?php

namespace App\Http\Middleware;

use Closure;

class typeOfLocation
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
        if(!session()->has('location')) {
            session(['location' => 'Carabobo']);
        }
        return $next($request);
    }
}
