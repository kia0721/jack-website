<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

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
        // $user = User::all()->count();
        // if (!($user == 1)) {
        //     Log::info(Auth::user());
        //     Log::info(Auth::user()->getRoleNames());
            if (!Auth::user()->hasRole('SMSGT Admin')) //If user does //not have this permission
            {
                abort('401');
            }
        // }

        return $next($request);
    }
}