<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class FlowDefaultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("flow_default")->insert([
            ["Nama_Urutan_Flow_Default" => "Permintaan Masuk"],
            ["Nama_Urutan_Flow_Default" => "Validasi Permintaan Layanan"],
        ]);
    }
}