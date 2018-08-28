<?php

namespace App\Http\Middleware;

use Closure;

class DriverCheck
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
        if($request->session()->get('user')->type != 'Driver')
        {
            if($request->session()->get('user')->type == 'Rider')
            {
                return redirect()->route('rider.dashboard');
            }
            else
            {
                return redirect()->route('admin.dashboard');
            }
            
        }
        return $next($request);
    }
}
