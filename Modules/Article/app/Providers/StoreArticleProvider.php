<?php

namespace Modules\Article\Providers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Modules\Article\Services\StoreArticleServices;

class StoreArticleProvider extends ServiceProvider
{
    /**
     * Boot the application events.
     */
    public function boot(): void
    {

    }

    /**
     * Register the service provider.
     */
    public function register(): void
    {
        $this->app->singleton(StoreArticleServices::class, function ($app) {
            $request = $app->make(Request::class);
            return new StoreArticleServices($request->all());
        });
    }
}
