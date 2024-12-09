<?php

namespace Modules\Category\Policies\Category;

use Illuminate\Auth\Access\HandlesAuthorization;
use Modules\Category\Services\AccessServices;

class CategoryPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     */
    public function store()
    {
        $accessServices = app(AccessServices::class);

        return $accessServices->auth('category-store');

    }
}
