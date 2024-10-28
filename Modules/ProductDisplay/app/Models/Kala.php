<?php

namespace Modules\ProductDisplay\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\ProductDisplay\Database\Factories\KalaFactory;

class Kala extends Model
{
    use HasFactory;

    protected $table='kalas';
    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];

    protected static function newFactory(): KalaFactory
    {
        //return KalaFactory::new();
    }
}
