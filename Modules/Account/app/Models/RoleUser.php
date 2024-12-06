<?php

namespace Modules\Account\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Account\Database\Factories\RoleUserFactory;

class RoleUser extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */

    public $timestamps = false;
    protected $table='role_user';

    protected static function newFactory(): RoleUserFactory
    {
        //return RoleUserFactory::new();
    }
}
