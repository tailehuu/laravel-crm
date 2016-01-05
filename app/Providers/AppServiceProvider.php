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
        view()->share('regions', ['West Coast', 'East Coast', 'India', 'APAC', 'Europe', 'Others']);
        view()->share('engagements', ['T&M', 'Fixed']);
        view()->share('services', ['Testing', 'Development', 'Sustenance']);
        view()->share('verticals', ['Com', 'M&E', 'H&T', 'S&A']);
        view()->share('deliveryLocations', ['India', 'Vietnam', 'US']);
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
