<?php

namespace App\Http\Middleware;

use App\Models\reSeller;
use Closure;
use Illuminate\Http\Request;


class reSellerMiddleware
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
        if (reSeller::loginCheck()) {
            return $next($request);
        }else{
            return redirect('reSeller/login')->with(['msg'=>'Login or register first.','msgType'=>'error']);
        }
       
    }
}
