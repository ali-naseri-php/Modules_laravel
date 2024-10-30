<?php

namespace Modules\ProductDisplay\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\ProductDisplay\Database\Factories\VisitKalaFactory;

class visit_kala extends Model
{
    use HasFactory;
    protected  $table ='visit_kala';

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];

    protected static function newFactory(): VisitKalaFactory
    {
        //return VisitKalaFactory::new();
    }
}
