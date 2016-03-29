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
        view()->share('regions', [
            'APAC',
            'East Coast',
            'Europe',
            'India',
            'West Coast',
            'Others'
        ]);

        view()->share('opportunityTypes', [
            'OO',
            'ON',
            'NN',
        ]);

        view()->share('engagements', [
            'Fixed',
            'T&M',
        ]);

        view()->share('services', [
            'Engineering',
            'Development',
            'IT Services',
            'Sustenance',
            'Testing',
        ]);

        view()->share('verticals', [
            'Com',
            'H&T',
            'M&E',
            'S&A'
        ]);

        view()->share('deliveryLocations', [
            'BLR',
            'DAL',
            'HCM',
        ]);
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
