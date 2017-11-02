<?php

namespace App\Http\Middleware;

use Closure;
use Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
class CheckRole
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
        // $currUser = $request;

        $currUser = Auth::user();
                Log::info("currUser ".json_encode($currUser));
        if ($currUser == null) {
            return redirect('/');
        } else if($currUser->user_type != Config::get('constants.USER_TYPE_ADMIN')){

            return redirect('dashboard');
        }
        return $next($request);
    }
}
