<?php

namespace App\Http\Middleware;

use Closure;

class UserVerify
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
        if (Auth::check()){
            if(Auth::user()->rules==3){
                return redirect('admin-show');
            }
            if(Auth::user()->rules==1){
                return redirect('viewst-profile');
            }
            if(Auth::user()->rules==2){
                return redirect('viewte-profile');
            }

        }
        return $next($request);

    }
}
