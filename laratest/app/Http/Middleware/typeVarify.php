<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class typeVarify
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
        $uname = $request->session()->get('uname');

        if($uname == "admin"){
            return $next($request);
        }
        else{
            return redirect('/user/list'); 
        }
        
    }
}
