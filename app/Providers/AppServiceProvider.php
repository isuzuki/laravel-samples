<?php

namespace App\Providers;

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
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerDebugbar();

        $this->registerSite();
    }

    protected function registerDebugbar()
    {
        if (config('app.debug')) {
            $this->app->register('Barryvdh\Debugbar\ServiceProvider');
        }
    }

    protected function registerSite()
    {
        $this->app['site'] = $this->app->share(function ($app) {
            $site = $app->make('App\Models\Site');

            return $site->findOrFail(config('site.id'));
        });
    }
}
