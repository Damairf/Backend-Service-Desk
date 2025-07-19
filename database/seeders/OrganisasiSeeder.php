<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class OrganisasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("reff_organisasi")->insert([
            [
                "ID_Status" => 1,
                "Nama_OPD" => "Dinas Komunikasi dan Informatika",
                "Nama_Pengelola" => "Pengelola 1",
                "No_HP_Pengelola" => "081234567890",
                "Email" => "pengelola1@gmail.com",
            ],
            [
                "ID_Status" => 1,
                "Nama_OPD" => "Dinas Pendidikan",
                "Nama_Pengelola" => "Pengelola 2",
                "No_HP_Pengelola" => "081234567890",
                "Email" => "pengelola2@gmail.com",
            ],
            [
                "ID_Status" => 1,
                "Nama_OPD" => "Dinas Pekerjaan Umum dan Penataan Ruang",
                "Nama_Pengelola" => "Pengelola 3",
                "No_HP_Pengelola" => "081234567890",
                "Email" => "pengelola3@gmail.com",
            ],
            [
                "ID_Status" => 1,
                "Nama_OPD" => "Dinas Lingkungan Hidup",
                "Nama_Pengelola" => "Pengelola 4",
                "No_HP_Pengelola" => "081234567890",
                "Email" => "pengelola4@gmail.com",
            ],
            [
                "ID_Status" => 1,
                "Nama_OPD" => "Dinas Ketahanan Pangan dan Peternakan",
                "Nama_Pengelola" => "Pengelola 5",
                "No_HP_Pengelola" => "081234567890",
                "Email" => "pengelola5@gmail.com",
            ],
        ]);
    }
}