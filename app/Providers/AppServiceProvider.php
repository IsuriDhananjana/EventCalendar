<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//Dhananjana Event Calendar
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    
     //Dhananjana Event Calendar
    public function boot()
    {
        schema::defaultStringLength(191);
    }
}
