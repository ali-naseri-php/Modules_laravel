<?php

namespace Modules\Account\Services;

use Illuminate\Support\Facades\Cache;
use Modules\Account\Models\Permission;
use Modules\Account\Models\Role;
use Modules\Category\Models\Category;


class  StorePermissionServics
{
    public function store($name)
    {
        $newRole = new Permission();
        $newRole->name = $name;
        $situation = $newRole->save();
        return $situation;
    }
}
