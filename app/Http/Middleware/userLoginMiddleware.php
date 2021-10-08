<?php

namespace App\Http\Middleware;

use App\Models\MyUser;
use Closure;
use Illuminate\Http\Request;

class userLoginMiddleware
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
         return $next($request);
       }else{
           return redirect('user/register')->with(['msg'=>'Please Login first','msgType'=>'error']);
       }
       
    }
}
