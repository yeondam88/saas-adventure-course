<?php

namespace App\Http\Middleware;

use Closure;

class IsAdmin
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
        if (auth()->user()->user_type == 'user') {
            return back();
            //return redirect('dashboard')->with(['alert' => 'You are not authorized to visit this page.', 'alert_type' => 'warning']);
        }
        return $next($request);
    }
}