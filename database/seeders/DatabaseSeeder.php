<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
        ]);
        $this->call([
            JabatanSeeder::class,
        ]);
        $this->call([
            StatusSeeder::class,
        ]);
        $this->call([
            FlowSeeder::class,
        ]);
        $this->call([
            OrganisasiSeeder::class,
        ]);
        $this->call([
            UserSeeder::class,
        ]);
    }
}
