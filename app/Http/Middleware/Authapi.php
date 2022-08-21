<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Authapi
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $token= $request->header('apikey');
        if ($token != 'helloatg'){
            return response()->json(['messege' => "INVALID API KEY"]);
        }
        else{
        return $next($request);}
    }
}
