<?php

namespace Modules\ProductManagement\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Modules\ProductManagement\Database\Factories\KalaFactory;
use Modules\ProductManagement\Events\ProductCreated;

class Kala extends Model
{
    use HasFactory;


    protected $table='kalas';


    protected static function newFactory(): KalaFactory
    {
        //return KalaFactory::new();
    }
    protected static function booted()
    {
        static::created(function ($product) {
            // ایونت ProductCreated را پس از ایجاد محصول اجرا کن
            ProductCreated::dispatch($product);
        });
    }
}
