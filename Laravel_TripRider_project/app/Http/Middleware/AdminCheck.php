<?php

namespace App\Http\Middleware;

use Closure;

class AdminCheck
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
        if($request->session()->get('user')->type != 'Admin')
        {
            if($request->session()->get('user')->type == 'Driver')
            {
                return redirect()->route('driver.dashboard');
            }
            else
            {
                return redirect()->route('rider.dashboard');
            }
            
        }

        return $next($request);
    }
}
