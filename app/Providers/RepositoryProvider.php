<?php

namespace App\Providers;

use App\Interfaces\MusicRepositoryInterface;
use App\Interfaces\UserRepositoryInterface;
use App\Repositories\MusicRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(MusicRepositoryInterface::class, MusicRepository::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
