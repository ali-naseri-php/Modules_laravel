<?php

namespace Modules\ProductManagement\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Modules\ProductManagement\Database\Factories\KalaFactory;

class Kala extends Model
{
    use HasFactory;


    protected $table='kalas';


    protected static function newFactory(): KalaFactory
    {
        //return KalaFactory::new();
    }
}
