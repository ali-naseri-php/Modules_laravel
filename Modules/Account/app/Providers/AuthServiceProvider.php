<?php

namespace Modules\Account\Providers;


use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Modules\Account\Models\Permission;
use Modules\Account\Models\Role;
use Modules\Account\Models\RolePermission;
use Modules\Account\Models\RoleUser;
use Modules\Account\Policies\AccountPolicy;
use Modules\Account\Policies\RolePolicy;
use Modules\Article\Models\Article;
use Modules\Article\Policies\ArticlePolicy;
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

        Role::class =>AccountPolicy::class,
        Permission::class =>AccountPolicy::class,
        RoleUser::class =>AccountPolicy::class,
        RolePermission::class =>AccountPolicy::class,
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
