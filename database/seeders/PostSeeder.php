<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'title'=>'Post 1 title',
            'body'=>'Post 1 body',
        ]);
        Post::create([
            'title'=>'Post 2 title',
            'body'=>'Post 2 body',
        ]);
    }



}
