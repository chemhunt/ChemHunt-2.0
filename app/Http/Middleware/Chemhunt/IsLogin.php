<?php

namespace App\Http\Middleware\Chemhunt;

use Closure;
use Illuminate\Http\Request;

class IsLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (config('chemhunt.login_status')===false){
            return redirect('/');
        }
        return $next($request);
    }
}
