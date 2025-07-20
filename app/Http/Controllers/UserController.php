<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


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
}