<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class IsiAlurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("isi_alur")->insert([
            ["Isi_Bagian_Alur" => "Permintaan Masuk"],
            ["Isi_Bagian_Alur" => "Verifikasi Dokumen"],
            ["Isi_Bagian_Alur" => "Dokumen Disetujui"],
        ]);
    }
}