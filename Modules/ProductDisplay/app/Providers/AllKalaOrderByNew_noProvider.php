<?php

namespace Modules\ProductDisplay\Providers;

use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;
use Modules\ProductDisplay\Services\KalaNoPropertis\AllKalaOrderByNewServices;

class AllKalaOrderByNew_noProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register(): void
    {
        $this->app->singleton(AllKalaOrderByNewServices::class, function ($app) {
            $request = $app->make(Request::class);  // دریافت شیء Request

            $page = $request->input('page', 1);    // گرفتن پارامتر id از URL
            $id_category = $request->route('id_category');
            //dd($category);
            // حالا می‌توانید این پارامتر را به کلاس یا سرویس مورد نظر ارسال کنید
            return new AllKalaOrderByNewServices($page, $id_category);
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
