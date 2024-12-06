<?php

namespace Modules\Account\Services;

use Illuminate\Support\Facades\Cache;
use Modules\Account\Models\Permission;
use Modules\Account\Models\Role;
use Modules\Account\Models\RolePermission;
use Modules\Category\Models\Category;


class  StoreRolePermissionServics
{
    public function store($data)
    {
        $newRole = new RolePermission();
        $newRole->role_id = $data['role'];
        $newRole->permission_id = $data['permission'];
        $situation = $newRole->save();
        return $situation;
    }
}
