<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelayanan;

class PelayananController extends Controller
{
    public function getAll_Permintaan(){
        $pelayanans = Pelayanan::get();
        return response()->json($pelayanans);
    }
}
