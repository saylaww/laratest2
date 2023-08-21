<?php

namespace Database\Seeders;

use App\Models\Cinema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CinemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cinema::create([
            'name'=>'Titanic'
        ]);
        Cinema::create([
            'name'=>'Simba'
        ]);
        Cinema::create([
            'name'=>'Maugli'
        ]);
    }
}
