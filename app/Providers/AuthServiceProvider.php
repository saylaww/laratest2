<?php

namespace App\Providers;

use App\Models\Music;
use App\Models\Post;
use App\Models\User;
use App\Policies\MusicPolicy;
use App\Policies\PostPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
//        Author::class=>AuthorPolicy::class,
        Post::class=>PostPolicy::class,
        Music::class=>MusicPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();
//        $this->registerPolicies();

//        Gate::define('isAdmin', function (User $user){
//           return $user->role == 'DIRECTOR';
//        });

    }



}
