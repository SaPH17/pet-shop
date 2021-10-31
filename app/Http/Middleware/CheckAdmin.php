<?php

namespace App\Http\Middleware;

use Closure;

class CheckAdmin
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
        if(auth()->user() && auth()->user()->email == 'admin@admin.com'){
            return $next($request);
        }
        else if(auth()->user()){
            return redirect('/home');
        }
        else{
            return redirect('/login');
        }
    }
}
