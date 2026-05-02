<?php

namespace App\Providers;
use App\Models\Service;
use Illuminate\Support\Facades\View;

use Illuminate\Support\ServiceProvider;

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
    public function boot()
    {
         View::composer('*', function ($view) {
        $view->with('navServices',
            Service::where('is_active', true)
                ->orderBy('sort_order')
                ->get()
        );
    });
    }
}
