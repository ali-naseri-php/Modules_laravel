<?php

namespace Modules\Account\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Account\Database\Factories\RolePermissionFactory;

class role_permission extends Model
{
    use HasFactory;
    protected $table='role_permission';

    /**
     * The attributes that are mass assignable.
     */

    protected static function newFactory(): RolePermissionFactory
    {
        //return RolePermissionFactory::new();
    }
}
