<?php

namespace Programic\AutoAfleveren;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\ServiceProvider;

class AutoAfleverenServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     */
    public function boot(): void
    {
        $config = config('services.autoAfleveren');
        $apiKey = data_get($config, 'apiKey', '');
        $url = data_get($config, 'baseUrl', '');

        Http::macro('autoafleveren', fn () => Http::withToken($apiKey)->baseUrl($url));
    }

    /**
     * Register the service provider.
     *
     */
    public function register(): void
    {
        $this->app->singleton(AutoAfleveren::class, fn () => new AutoAfleveren());
        $this->app->alias(AutoAfleveren::class, 'autoafleveren');
    }
}
