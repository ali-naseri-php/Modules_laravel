<?php
namespace Modules\Search\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Modules\Article\Events\ArticleCreated;
use Modules\Category\Events\CategoryCreated;
use Modules\ProductManagement\Events\ProductCreated;  // وارد کردن ایونت
use Modules\Search\Listeners\AddArticleToSearch;
use Modules\Search\Listeners\AddCategoryToSearch;
use Modules\Search\Listeners\AddProductToSearch;    // وارد کردن لیسنر

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event handler mappings for the application.
     *
     * @var array<string, array<int, string>>
     */
    protected $listen = [
        ProductCreated::class => [
            AddProductToSearch::class,  // ثبت لیسنر برای ایونت ProductCreated
        ],
        CategoryCreated::class=>[
            AddCategoryToSearch::class, // ��بت لیستنر برای ایونت CategoryCreated
        ],
        ArticleCreated::class=>[
            AddArticleToSearch::class ,// articleCreated ثبت لیسنر
        ]
    ];

    /**
     * Indicates if events should be discovered.
     *
     * @var bool
     */
    protected static $shouldDiscoverEvents = true;

    /**
     * Configure the proper event listeners for email verification.
     *
     * @return void
     */
    protected function configureEmailVerification(): void
    {
        // این متد برای پیکربندی بررسی ایمیل است که در اینجا نیازی به تنظیم ندارد.
    }
}
