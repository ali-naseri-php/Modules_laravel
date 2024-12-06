<?php

namespace Modules\Account\Services;

use Illuminate\Support\Facades\Cache;
use Modules\Account\Models\Permission;
use Modules\Account\Models\Role;
use Modules\Account\Models\RolePermission;
use Modules\Account\Models\RoleUser;
use Modules\Category\Models\Category;


class  StoreRoleUserServics
{
    public function store($data)
    {
//        dd($data);
        $newRole = new RoleUser();
        $newRole->role_id = $data['role'];
        $newRole->user_id = $data['user'];
        $situation = $newRole->save();
        return $situation;
    }
}
