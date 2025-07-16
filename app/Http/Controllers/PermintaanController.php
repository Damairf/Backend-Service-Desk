<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permintaan;

class PermintaanController extends Controller
{
    public function getAll_Permintaan(){
        $permintaans = Permintaan::get();
        return response()->json($permintaans);
    }
}
