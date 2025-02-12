<?php

namespace Modules\ProductManagement\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\ProductManagement\Database\Factories\PropertieKalaFactory;

class PropertieKala extends Model
{
    use HasFactory;
    protected $table='properties_kalas';

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];

    protected static function newFactory(): PropertieKalaFactory
    {
        //return PropertieKalaFactory::new();
    }
}
