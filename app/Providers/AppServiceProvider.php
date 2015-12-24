<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->share('regions', ['West Coast', 'East Coast']);
        view()->share('engagements', ['T&M', 'Fixed']);
        view()->share('services', ['Testing', 'Development', 'Sustenance']);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
