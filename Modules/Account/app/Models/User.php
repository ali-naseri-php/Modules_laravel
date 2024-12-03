<?php

namespace Modules\Account\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Account\Database\Factories\UserFactory;

class User extends Authenticatable
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
    /**
     * The attributes that are mass assignable.
     */


    protected static function newFactory(): UserFactory
    {
        //return UserFactory::new();
    }
}
