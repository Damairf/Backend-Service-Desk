<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Firebase\JWT\JWT;

class UserController extends Controller
{
    
    public function findAll_User(){
        $users = User::get();
        return response()->json($users);
    }
    
    public function createOne_User(Request $request){

        $Nama_Depan = $request->Nama_Depan;
        $Nama_Belakang = $request->Nama_Belakang;
        $NIP = $request->NIP;
        $Password = Hash::make($request->Password);
        $ID_Role = $request->ID_Role;
        $ID_Jabatan = $request->ID_Jabatan;
        $ID_Status = $request->ID_Status;
        $ID_Organisasi = $request->ID_Organisasi;

        $newUser = User::create([
            'Nama_Depan' => $Nama_Depan,
            'Nama_Belakang' => $Nama_Belakang,
            'NIP' => $NIP,
            'Password' => $Password,
            'ID_Role' => $ID_Role,
            'ID_Jabatan' => $ID_Jabatan,
            'ID_Status' => $ID_Status,
            'ID_Organisasi'=> $ID_Organisasi
        ]);

        return response(["message" => "User ditambahkan", "data" => $newUser]);
    }

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

    public function profile(Request $request){
        $user = User::where("ID_User", $request->ID_User)->first();

        return response(["message"=>"ini endpoint profile", "data user" => $user]);
    }

    public function edit(){
        return response (["ini endpoint edit"]);
    }
}
