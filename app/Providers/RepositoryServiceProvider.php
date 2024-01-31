<?php

namespace App\Providers;

use App\Interfaces\admin\UserInterface;
use App\Interfaces\user\UserInterface as AuthUserInterface;

use App\Repositories\admin\UserRepository;
use App\Repositories\user\UserRepository as AuthUserRepository;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(UserInterface::class, UserRepository::class);
        $this->app->bind(AuthUserInterface::class, AuthUserRepository::class);


    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
