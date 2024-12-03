<?php

namespace Modules\Account\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Account\Database\Factories\RoleUserFactory;

class role_user extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];
    protected $table='role_user';

    protected static function newFactory(): RoleUserFactory
    {
        //return RoleUserFactory::new();
    }
}
