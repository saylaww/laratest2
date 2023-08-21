<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::create([
            'name'=>"Nukus"
        ]);
        Movie::create([
            'name'=>"Shimbay"
        ]);
        Movie::create([
            'name'=>"Xojeli"
        ]);
    }
}
