<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class UserMiddleware
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

        
        if( Auth::check()){


            if(Auth::user()->role_id == 2){

                return $next($request);

            }elseif( Auth::user()->role_id == 1 ){

                return redirect('/');

            }
            


        }else{

            return redirect('/');

        }


    }
}
