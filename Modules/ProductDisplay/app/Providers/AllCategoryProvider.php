<?php

namespace Modules\ProductDisplay\Providers;

use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;
use Modules\ProductDisplay\Services\Kala\AllCategoryServices;


class AllCategoryProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register(): void
    {
        $this->app->singleton(AllCategoryServices::class, function ($app) {
            $request = $app->make(Request::class);  // دریافت شیء Request

            $page = $request->input('page',1);    // گرفتن پارامتر id از URL

            // حالا می‌توانید این پارامتر را به کلاس یا سرویس مورد نظر ارسال کنید
            return new AllCategoryServices($page);
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
