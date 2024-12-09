<?php

namespace Modules\Category\Providers;


use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Modules\Category\Models\Category;
use Modules\Category\Models\Propertie;
use Modules\Category\Policies\Category\CategoryPolicy;
use Modules\Category\Policies\Propertie\PropertiePolicy;
use Modules\ProductManagement\Models\Kala;
use Modules\ProductManagement\Policies\KalaPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
ُُ     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [

        Category::class => CategoryPolicy::class,
        Propertie::class => PropertiePolicy::class,
    ];

    /**
     * Register any application services.
     */
    public function boot()
    {
//        dd('ali');
        $this->registerPolicies();

        // ثبت قوانین اضافی یا Gate‌ها در اینجا
    }
}