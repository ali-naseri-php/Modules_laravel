<?php

namespace Modules\ProductDisplay\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\ProductDisplay\Database\Factories\PropertiFactory;

class Propertie extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table ='properties';
    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];

    protected static function newFactory(): PropertiFactory
    {
        //return PropertiFactory::new();
    }
}
