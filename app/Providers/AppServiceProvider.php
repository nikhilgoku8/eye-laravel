<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Specialization;

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
        $ua = strtolower($_SERVER['HTTP_USER_AGENT']);
        $desktop = strpos($ua,'android')=== false && strpos($ua,'iphone')=== false;
        View::share('desktop', $desktop);

        $specializations = Specialization::all();
        View::share('specializations', $specializations);
    }
}
