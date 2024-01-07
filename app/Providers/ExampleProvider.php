<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ExampleProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $data = array();
        $data['a'] = 30;
        $data['b'] = 20;
        $data['c'] = 50;
        view()->share('number', $data);
    }
}
