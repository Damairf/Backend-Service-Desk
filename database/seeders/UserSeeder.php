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
                "NIP" => 1,
            ],
        ]);
    }
}