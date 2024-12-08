<?php

namespace Modules\ProductManagement\Providers;


use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Modules\ProductManagement\Models\Kala;
use Modules\ProductManagement\Policies\KalaPolicy;

class ProductAuthServiceProvider extends ServiceProvider
{
    /**
ُُ     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Kala::class => KalaPolicy::class,
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
