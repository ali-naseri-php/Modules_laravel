<?php

namespace Modules\Category\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Category\Database\Factories\PropertieFactory;

class Propertie extends Model
{
    use HasFactory;
    protected $table ='properties';

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];

    protected static function newFactory(): PropertieFactory
    {
        //return PropertieFactory::new();
    }
}
