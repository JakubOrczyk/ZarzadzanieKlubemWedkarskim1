<?php

namespace Database\Seeders;

use App\Models\LakeFish;
use App\Models\Tournament;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            FishSeeder::class,
            LakeSeeder::class,
            TournamentSeeder::class,
            LakeFishSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
        ]);
    }
}
