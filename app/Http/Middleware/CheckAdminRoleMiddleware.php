<?php

namespace App\Http\Middleware;

use Closure;

class CheckAdminRoleMiddleware
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
        $user = auth()->user();
        if($user) {
            $roles = $user->roles->pluck('id')->toArray();
            if(in_array(1, $roles)){
                return $next($request);
            }
        }
        return $next($request);
    }

    
}
