<?php

namespace App\Http\Middleware;

use App\Models\reSeller;
use Closure;
use Illuminate\Http\Request;

class reSellerAlreadyLoginCheckMiddleware
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
            return redirect('reSeller/dashbord')->with(['msg'=>'You are Already loged in.','msgType'=>'warning']);
        }else{
            return $next($request);
        }
        
    }
}
