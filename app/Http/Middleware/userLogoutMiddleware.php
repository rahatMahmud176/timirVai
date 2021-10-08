<?php

namespace App\Http\Middleware;

use App\Models\MyUser;
use Closure;
use Illuminate\Http\Request;

class userLogoutMiddleware
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
        if (MyUser::loginCheck()) {
            return redirect('dashbord')->with(['msg'=>'You are already loged in.','msgType'=>'warning']); 
        }else{
            return $next($request);
        }
        
    }
}
