<?php

namespace Database\Seeders;

use App\Models\Ad;
use App\Models\Branch;
use App\Models\Status;
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
            UserSeeder::class,
            StatusSeeder::class,
            BranchSeeder::class,
            AdSeeder::class,
        ]);
    }
}
