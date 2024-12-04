<?php

namespace Modules\Account\Services;

use Illuminate\Support\Facades\Cache;
use Modules\Account\Models\Role;
use Modules\Category\Models\Category;


class  StoreRoleServics
{
    public function store($name)
    {
        $newRole = new Role();
        $newRole->name = $name;
        $situation = $newRole->save();
        return $situation;
    }
}
