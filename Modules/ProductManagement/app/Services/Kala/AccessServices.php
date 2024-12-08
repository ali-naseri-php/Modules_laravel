<?php

namespace Modules\ProductManagement\Services\Kala;

use Illuminate\Support\Facades\Auth;
use Modules\ProductManagement\Models\User;


class AccessServices
{
    protected $id;

    public function __construct()
    {
        $this->id = Auth::id();
    }


    public function auth($access)
    {
        $status = User::join('role_user', 'role_user.user_id', '=', 'users.id')  // join اول به جدول users
        ->join('roles', 'roles.id', '=', 'role_user.role_id')
            ->join('role_permission', 'role_permission.role_id', '=', 'roles.id')
            ->join('permissions', 'permissions.id', '=', 'role_permission.permission_id')
            ->where('users.id', $this->id)
            ->where('permissions.name', $access)
            ->first();
        if ($status==null)
            return false;
        else
            return true;
    }


}
