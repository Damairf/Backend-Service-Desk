<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("user")->insert([
            [
                "ID_Role" => 1,
                "ID_Jabatan" => 1,
                "ID_Organisasi" => 1,
                "ID_Status" => 1,
                "NIP" => 123456789123456789,
                "Nama_Depan" => "User",
                "Nama_Belakang" => "Staff",
                "Password" => "passworduser1",
            ],
            [
                "ID_Role" => 2,
                "ID_Jabatan" => 2,
                "ID_Organisasi" => 2,
                "ID_Status" => 1,
                "NIP" => 123456789123456789,
                "Nama_Depan" => "Pengelola",
                "Nama_Belakang" => "Koordinator",
                "Password" => "passworduser2",
            ],
            [
                "ID_Role" => 3,
                "ID_Jabatan" => 3,
                "ID_Organisasi" => 3,
                "ID_Status" => 1,
                "NIP" => 123456789123456789,
                "Nama_Depan" => "Unit",
                "Nama_Belakang" => "Staff",
                "Password" => "passworduser3",
            ],
            [
                "ID_Role" => 4,
                "ID_Jabatan" => 5,
                "ID_Organisasi" => 4,
                "ID_Status" => 1,
                "NIP" => 123456789123456789,
                "Nama_Depan" => "Teknis",
                "Nama_Belakang" => "Tenaga",
                "Password" => "passworduser4",
            ],
            [
                "ID_Role" => 5,
                "ID_Jabatan" => 6,
                "ID_Organisasi" => 5,
                "ID_Status" => 1,
                "NIP" => 123456789123456789,
                "Nama_Depan" => "Kepala",
                "Nama_Belakang" => "Dinas",
                "Password" => "passworduser5",
            ],
        ]);
    }
}