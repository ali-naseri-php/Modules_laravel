<?php

namespace Modules\Category\Providers;

use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;
use Modules\Category\Livewire\Category\EditeCategory;


class EditeCategoryProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register(): void
    {
        $this->app->singleton(EditeCategory::class, function ($app) {
            $request = $app->make(Request::class);  // دریافت شیء Request

            $categoryId = $request->route('id');    // گرفتن پارامتر id از URL

            // حالا می‌توانید این پارامتر را به کلاس یا سرویس مورد نظر ارسال کنید
            return new EditeCategory($categoryId);
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
