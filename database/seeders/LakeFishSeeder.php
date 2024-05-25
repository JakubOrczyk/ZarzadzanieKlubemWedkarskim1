<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use App\Models\LakeFish;

class LakeFishSeeder extends Seeder
{
    public function run(): void
    {

        Schema::withoutForeignKeyConstraints(function () {
            LakeFish::truncate();
        });

        LakeFish::insert( [

                ['lake_id' => 1, 'fish_id' => 1],
                ['lake_id' => 1, 'fish_id' => 2],
                ['lake_id' => 1, 'fish_id' => 3],
                ['lake_id' => 1, 'fish_id' => 4],
                ['lake_id' => 2, 'fish_id' => 1],
                ['lake_id' => 2, 'fish_id' => 2],
                ['lake_id' => 2, 'fish_id' => 3],
                ['lake_id' => 2, 'fish_id' => 4],
                ['lake_id' => 3, 'fish_id' => 1],
                ['lake_id' => 3, 'fish_id' => 2],
                ['lake_id' => 3, 'fish_id' => 3],
                ['lake_id' => 4, 'fish_id' => 4],
                ['lake_id' => 4, 'fish_id' => 1],
                ['lake_id' => 4, 'fish_id' => 2],
                ['lake_id' => 5, 'fish_id' => 3],
                ['lake_id' => 5, 'fish_id' => 4],
                ]
            );
        
        
            }
        }
        