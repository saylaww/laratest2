<?php

namespace Database\Seeders;

use App\Models\Music;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MusicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Music::create([
            'name'=>'QARAQALPAQSHA'
        ]);
        Music::create([
            'name'=>'RUSSIAN'
        ]);
        Music::create([
            'name'=>'TURKISH'
        ]);

    }
}
