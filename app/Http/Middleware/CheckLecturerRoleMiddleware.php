<?php

namespace App\Http\Middleware;

use Closure;

class CheckLecturerRoleMiddleware
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
            if(in_array(3, $roles)){
                return $next($request);
            }
        }
        return abort(403, 'Unathorized to access this.');
    }
}
