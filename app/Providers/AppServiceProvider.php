<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Model;
use \Gate;
use App\Models\User;  


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Model::preventLazyLoading();
        // // Paginator::useBootstrap();
        // Gate::define("edit-movie", function(User $user, Movie $movie){
        //     return $movie->streaming->user->is($user);
        // });
    }
}
