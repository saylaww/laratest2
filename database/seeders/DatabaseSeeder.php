<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Author;
use App\Models\Cinema;
use App\Models\CinemaMovie;
use App\Models\Movie;
use App\Models\Post;
use App\Models\User;
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
            PostSeeder::class,
            MusicSeeder::class,
            CinemaSeeder::class,
            MovieSeeder::class,
        ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

//        $this->call([
//        AuthorSeeder::class,
//        PhoneSeeder::class,
//    ]);

//        Cinema::factory(8)->create();
//        Movie::factory(30)->create();
//        CinemaMovie::factory(50)->create();

    }
}
