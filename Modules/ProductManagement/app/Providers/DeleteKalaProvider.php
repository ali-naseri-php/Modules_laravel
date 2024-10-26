<?php

namespace Modules\ProductManagement\Providers;

use Illuminate\Http\Request;
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

        $this->app->bind(DeleteKalaServices::class, function ($app) {
            $id = request()->route('id'); // اینجا مقدار id را از درخواست دریافت کنید
//            dd($id);

            return new DeleteKalaServices($id);
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
