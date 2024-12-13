<?php

namespace Modules\Account\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Modules\Account\Services\AccessServices;

class AccountPolicy
{
    use HandlesAuthorization;


    public function store()
    {
        $accessServices = app(AccessServices::class);
        return $accessServices->auth('account-store');
    }
}
