<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

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
        if (env("APP_ENV") === "production") {
            \URL::forceScheme("https");
        }

        // Apply middleware to all API routes
        Route::middleware("api")->group(function () {
            Route::prefix("api")->group(base_path("routes/api.php"));
        });
    }
}
