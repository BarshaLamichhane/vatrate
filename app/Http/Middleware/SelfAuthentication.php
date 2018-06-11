<?php

namespace App\Http\Middleware;

use Closure;
use App\AccessToken;
class AuthenticationMiddleware
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
        $header = $request->header('Authorization');
        
        $accessToken = AccessToken::where('access_token', '=', $header)->first();
        if($accessToken == null){
            //return array("message" => "NOT AUTHORIZED");
            abort(401);
        }
        else{
            return $next($request);
        }
    }
}