<?php

namespace Database\Seeders;

use App\Models\Phone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Phone::create([
            'number'=>"974748061",
            'desc'=>"tel haqq",
            'author_id'=>1,
        ]);
        Phone::create([
            'number'=>"93364856",
            'desc'=>"UCELL 222",
            'author_id'=>1,
        ]);
        Phone::create([
            'number'=>"999999999",
            'desc'=>"TEST number",
            'author_id'=>2,
        ]);
    }
}
