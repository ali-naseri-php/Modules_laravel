<?php

namespace Modules\ProductManagement\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\ProductManagement\Database\Factories\CategoryFactory;

class Category extends Model
{
    use HasFactory;
protected $table='categorys';
    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];

    protected static function newFactory(): CategoryFactory
    {
        //return CategoryFactory::new();
    }
}
