<?php

namespace Modules\ProductManagement\Providers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;
use Modules\ProductManagement\Services\Kala\SelectCtegoryForKalaServices;

class SelectCtegoryForKalaProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register(): void
    {
        Log::info('این یک پیام select  است');
        $this->app->singleton(SelectCtegoryForKalaServices::class, function ($app) {
            $request = $app->make(Request::class);  // دریافت شیء Request
            $id = $request->route('id');


            //dd($page);
            // حالا می‌توانید این پارامتر را به کلاس یا سرویس مورد نظر ارسال کنید
            return new SelectCtegoryForKalaServices($id);
        });

        Log::info('این یک پیام select end است');
    }

    /**
     * Get the services provided by the provider.
     */
    public function provides(): array
    {
        return [];
    }
}
