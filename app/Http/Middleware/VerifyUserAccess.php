<?php

namespace App\Http\Middleware;

use Closure;

class VerifyUserAccess
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
        if(true){
            return $next($request);
        }

        return response('Yo have no access', 403);
    }
}
