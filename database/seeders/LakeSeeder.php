<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use App\Models\Lake;

class LakeSeeder extends Seeder
{
    public function run(): void
    {

        Schema::withoutForeignKeyConstraints(function () {
            Lake::truncate();
        });

        Lake::insert( [
            [
                'name' => 'Wisłok',
                'location' => 'Rzeszów',
                'type' => 'rzeka',
                'image' => 'wislok.jpg',
            ],
            [
                'name' => 'Jezioro Morskie Oko',
                'location' => 'Zakopane',
                'type' => 'jezioro',
                'image' => 'morskie_oko.jpg',
            ],
            [
                'name' => 'Jezioro Śniardwy',
                'location' => 'Mazury',
                'type' => 'jezioro',
                'image' => 'sniardwy.jpg',
            ],
            [
                'name' => 'Jeziorsko',
                'location' => 'Sieradz',
                'type' => 'staw',
                'image' => 'jeziorsko.jpg',
            ],
            [
                'name' => 'Zalew Zegrzyński',
                'location' => 'Warszawa',
                'type' => 'jezioro',
                'image' => 'zegrze.jpg',
            ],
            [
                'name' => 'Jezioro Rożnowskie',
                'location' => 'Nowy Sącz',
                'type' => 'jezioro',
                'image' => 'roznowo.jpg',
            ],
            [
                'name' => 'San',
                'location' => 'Bieszczady',
                'type' => 'rzeka',
                'image' => 'san.jpg',
            ],
            [
                'name' => 'Jezioro Hańcza',
                'location' => 'Suwałki',
                'type' => 'jezioro',
                'image' => 'hancza.jpg',
            ],
            [
                'name' => 'Odra',
                'location' => 'Wrocław',
                'type' => 'rzeka',
                'image' => 'odra.jpg',
            ],
            [
                'name' => 'Jezioro Wigry',
                'location' => 'Augustów',
                'type' => 'jezioro',
                'image' => 'wigry.jpg',
            ],
            [
                'name' => 'Drawa',
                'location' => 'Drawsko Pomorskie',
                'type' => 'rzeka',
                'image' => 'drawa.jpg',
            ],
            [
                'name' => 'Zalew Soliński',
                'location' => 'Bieszczady',
                'type' => 'jezioro',
                'image' => 'solina.jpg',
            ],
            ]
        );
    
    
        }
    }
    