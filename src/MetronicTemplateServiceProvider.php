<?php

namespace Number7even\MetronicTemplate;

use Illuminate\Support\ServiceProvider;

class MetronicTemplateServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../views', 'metronic-template');
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
