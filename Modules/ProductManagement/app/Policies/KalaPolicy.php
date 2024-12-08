<?php

namespace Modules\ProductManagement\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Modules\ProductManagement\Models\User;
use Modules\ProductManagement\Services\Kala\AccessServices;

class KalaPolicy
{
    use HandlesAuthorization;

    public function store()
    {
        $accessServices = app(AccessServices::class);

        return $accessServices->auth('kala-create');
    }
}
