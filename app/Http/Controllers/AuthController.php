<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Firebase\JWT\JWT;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
     public function login(Request $request)
    {
        $NIP = $request->NIP;
        $Password = $request->Password;

        $user = User::where('NIP', $NIP)->first();
        

        if(!$user){
            return response("NIP salah");
        }

        if(!Hash::check($Password, $user->Password)){
            return response("Password salah", 201);
        }
       

        $key = env("JWT_SECRET");
        $payload = [
            "ID_User" => $user->ID_User,
            "iat" => time(),
        ];
        $hash = "HS256";

        $token = JWT::encode($payload, $key, $hash);
        
        return response([
            "message" => "Login Berhasil",
            "data" => $token,
        ]);

    }
}
