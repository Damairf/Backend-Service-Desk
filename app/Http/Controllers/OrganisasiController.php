<?php

namespace App\Http\Controllers;

use App\Models\Organisasi;
use Illuminate\Http\Request;

class OrganisasiController extends Controller
{
    public function findAll_Organisasi(){
        $organisasis = Organisasi::with("status")->get();
        return response()->json($organisasis);
    }
}
