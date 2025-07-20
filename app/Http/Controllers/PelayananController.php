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

    public function postLayanan(Request $request){
        $ID_User = $request->ID_User;
        $ID_Jenis_Pelayanan = $request->ID_Jenis_Pelayanan;
        $ID_Survey = $request->ID_Survey;
        $Perihal = $request->Perihal;
        $Deskripsi = $request->Deskripsi;
        $Surat_Dinas_Path = $request->Surat_Dinas_Path;
    }
}
