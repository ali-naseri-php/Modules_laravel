<?php

namespace Modules\ProductDisplay\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\ProductDisplay\Database\Factories\PropertieKalaFactory;

class PropertieKala extends Model
{
    protected  $table='properties_kalas';
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];

    protected static function newFactory(): PropertieKalaFactory
    {
        //return PropertieKalaFactory::new();
    }
}
