<?php

namespace Wit\Errorview;

use Illuminate\Support\ServiceProvider;

class ErrorviewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
           __DIR__.'/views/errors/' => base_path('resources/views/errors')
        ],'views');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
