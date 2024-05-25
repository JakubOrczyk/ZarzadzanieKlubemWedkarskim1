<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use App\Models\Fish;

class FishSeeder extends Seeder
{
    public function run(): void
    {

        Schema::withoutForeignKeyConstraints(function () {
            Fish::truncate();
        });

        Fish::insert( [
[
    'species' => 'Pstrąg',
    'type' => 'średnio-tłusty',
    'image' => 'pstrag.jpg',
],
[
    'species' => 'Szczupak',
    'type' => 'chudy',
    'image' => 'szczupak.jpg',
],
[
    'species' => 'Okon',
    'type' => 'chudy',
    'image' => 'okon.jpg',
],
[
    'species' => 'Węgorz',
    'type' => 'tłusty',
    'image' => 'wegorz.jpg',
],
[
    'species' => 'Sum',
    'type' => 'chudy',
    'image' => 'sum.jpg',
],
[
    'species' => 'Karp',
    'type' => 'średnio-tłusty',
    'image' => 'karp.jpg',
],
[
    'species' => 'Lin',
    'type' => 'chudy',
    'image' => 'lin.jpg',
],
[
    'species' => 'Leszcz',
    'type' => 'chudy',
    'image' => 'leszcz.jpg',
],
[
    'species' => 'Dorsz',
    'type' => 'chudy',
    'image' => 'dorsz.jpg',
],
[
    'species' => 'Sandacz',
    'type' => 'chudy',
    'image' => 'sandacz.jpg',
],
[
    'species' => 'Łosoś',
    'type' => 'tłusty',
    'image' => 'losos.jpg',
],
[
    'species' => 'Płoć',
    'type' => 'chudy',
    'image' => 'ploc.jpg',
],

        ]
    );


    }
}