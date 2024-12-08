<?php

namespace Modules\ProductManagement\Providers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;
use Modules\ProductManagement\Services\Kala\DeleteKalaServices;
use Modules\ProductManagement\Services\Kala\DeletePropertiKalaServices;
use Modules\ProductManagement\Services\Kala\UpdateKalaServices;

class DeleteKalaProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register(): void
    {
        Log::info('این یک پیام del است');
        $this->app->bind(DeleteKalaServices::class, function ($app) {
            $id = request()->route('id'); // اینجا مقدار id را از درخواست دریافت کنید
//            dd($id);

            return new DeleteKalaServices($id);
        });

        Log::info('این یک پیامend del است');
    }

    /**
     * Get the services provided by the provider.
     */
    public function provides(): array
    {
        return [];
    }
}
