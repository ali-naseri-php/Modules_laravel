<?php

namespace Modules\ProductManagement\Providers;

use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;
use Modules\ProductManagement\Services\Kala\AllCategoryServices;
use Modules\ProductManagement\Services\Kala\PropertiForAddKalaServices;

class PropertiForAddKalaProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register(): void
    {

        $this->app->singleton(PropertiForAddKalaServices::class, function ($app) {
            $request = $app->make(Request::class);  // دریافت شیء Request


            $id_category = $request->input('id_category');
            //dd($page);
            // حالا می‌توانید این پارامتر را به کلاس یا سرویس مورد نظر ارسال کنید
            return new PropertiForAddKalaServices($id_category);
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
