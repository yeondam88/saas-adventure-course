<?php

namespace App\Http\Middleware;

use Closure;

class SubscriptionMiddleware
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
        if (!auth()->guest() && !auth()->user()->subscribed('main') && !auth()->user()->onTrial()) {
            return redirect('settings/billing')->with(['alert' => 'You no longer have an active subscription', 'alert_type' => 'warning']);
        }

        return $next($request);
    }
}