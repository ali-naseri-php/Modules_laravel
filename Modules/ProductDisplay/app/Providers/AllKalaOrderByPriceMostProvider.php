<?php

namespace Modules\ProductDisplay\Providers;

use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;
use Modules\ProductDisplay\Services\Kala\AllKalaOrderByPriceMostServices;


class AllKalaOrderByPriceMostProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register(): void
    {

            $this->app->singleton(AllKalaOrderByPriceMostServices::class, function ($app) {
                $request = $app->make(Request::class);  // دریافت شیء Request


                $page = $request->input('page',1);
//dd($page);
                // حالا می‌توانید این پارامتر را به کلاس یا سرویس مورد نظر ارسال کنید
                return new AllKalaOrderByPriceMostServices($page);
            });


    }

    /**
     * Get the services provided by the provider.
     */
    public function provides(): array
    {
        return [];
    }
}