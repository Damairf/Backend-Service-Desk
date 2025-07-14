<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("reff_role")->insert([
            ["Nama_Role" => "User"],
            ["Nama_Role" => "Pengelola"],
            ["Nama_Role" => "Unit Pelaksana"],
            ["Nama_Role" => "Pelaksana Teknis"],
            ["Nama_Role" => "Kepala Dinas"]
        ]);
    }
}
