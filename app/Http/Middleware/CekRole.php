<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use APP\Models\User;

class CekRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $ID_User = $request->ID_User;
        
        $user = User::where("ID_User", $ID_User)->first();

        if(!$user){
            return response (["tidak terautentikasi"]);
        }

        if($user->ID_Role != 12){
            return response (["tidak diizinkan"]);
        }
        
        return $next($request);
    }
}
