<?php

namespace Modules\ProductManagement\Providers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;
use Modules\ProductManagement\Services\Kala\PropertiForKalaServices;

class PropertiForAddKalaProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register(): void
    {
        Log::info('این یک پیام properti است');

        $this->app->singleton(PropertiForKalaServices::class, function ($app) {
            $request = $app->make(Request::class);  // دریافت شیء Request


            $id_category = $request->input('id_category');
            //dd($page);
            // حالا می‌توانید این پارامتر را به کلاس یا سرویس مورد نظر ارسال کنید
            return new PropertiForKalaServices($id_category);
        });

        Log::info('این یک پیام properti end  است');
    }

    /**
     * Get the services provided by the provider.
     */
    public function provides(): array
    {
        return [];
    }
}
