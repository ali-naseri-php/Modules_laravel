<?php

namespace Modules\Account\Services;

use Illuminate\Support\Facades\Cache;
use Modules\Account\Models\Permission;
use Modules\Account\Models\Role;
use Modules\Category\Models\Category;


class  AllPermissionServices
{
    public function all()
    {
     $allPermissions = Permission::all();
     return $allPermissions;
    }
}
