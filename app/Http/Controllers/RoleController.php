<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\ResponseEvent;

class RoleController extends Controller
{
    public function findAll_Role(){
        $roles = Role::get();
        return response()->json($roles);
    }

    public function findOne_Role(Request $request){
        $roleId = $request->route("roleId");
        $role = Role::where("ID_Role", $roleId)->get();
        return response()->json($role);
    }
        
    
}
