<?php

namespace Modules\Category\Providers;

use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;
use Modules\Category\Livewire\Category\CreateCategory;


class CreateCategoryProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register(): void
    {

        $this->app->singleton(CreateCategory::class, function ($app) {
            $request = $app->make(Request::class);  // دریافت شیء Request

            $categoryId = $request->route('id');    // گرفتن پارامتر id از URL

            // حالا می‌توانید این پارامتر را به کلاس یا سرویس مورد نظر ارسال کنید
            return new CreateCategory($categoryId);
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
