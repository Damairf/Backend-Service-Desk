<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    public function findAll_Jabatan()
    {
        $jabatans = Jabatan::get();
        return response()->json($jabatans);
    }

    public function findOne_Jabatan(Request $request){
        $jabatanId = $request->route('jabatanId');
        $jabatan = Jabatan::where('ID_Jabatan', $jabatanId)->get();

        return response()->json($jabatan);
    }

    public function insertOne_Jabatan(Request $request)
    {
        $Nama_Jabatan = $request->Nama_Jabatan;

        Jabatan::insert([
            'Nama_Jabatan'=>$Nama_Jabatan,
        ]); 

        return response("Jabatan Ditambahkan", 201);
    }

    public function updateOne_Jabatan(Request $request){
        $jabatanId = $request->route('jabatanId');
        $Nama_Jabatan = $request->Nama_Jabatan;

        Jabatan::where('ID_Jabatan', $jabatanId)
        ->update(['Nama_Jabatan'=>$Nama_Jabatan]);

        return response("Jabatan Diperbarui");
    }

    public function deleteOne_Jabatan(Request $request){
        $jabatanId = $request->route('jabatanId');
        Jabatan::where('ID_Jabatan', $jabatanId)->delete();

        return response("Jabatan Dihapus");
    }
}
