<?php

namespace App\Http\Middleware;

use Closure;
use Firebase\JWT\Key;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Firebase\JWT\JWT;
use App\Models\User;

class CekToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $token = $request->header("Authorization");

        if(!$token){
            return response("Tidak terautentikasi");
        }
        
        $jwt_token = explode(" ", $token)[1];
        $key = env("JWT_SECRET");
        $hash = "HS256";

        $payload = JWT::decode($jwt_token, new Key($key, $hash));

        $user = User::where("ID_User", $payload->ID_User)->first();

        if(!$user){
            return response("Tidak terautentikasi");
        }

        $request["ID_User"] = $user->ID_User;
        return $next($request);
    }
}
