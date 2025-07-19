<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("reff_jabatan")->insert([
            ["Nama_Jabatan" => "Staff"],
            ["Nama_Jabatan" => "Koordinator"],
            ["Nama_Jabatan" => "Kepala Bidang"],
            ["Nama_Jabatan" => "Sekretaris Dinas"],
            ["Nama_Jabatan" => "Tenaga Teknis"],
            ["Nama_Jabatan" => "Kepala Dinas"],
        ]);
    }
}
