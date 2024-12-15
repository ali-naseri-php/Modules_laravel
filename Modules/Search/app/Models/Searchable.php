<?php

namespace Modules\Search\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Search\Database\Factories\SearchableFactory;

class Searchable extends Model
{
    use HasFactory;
protected  $table='search_entries';
    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['searchable_id','searchable_type','title'];

    protected static function newFactory(): SearchableFactory
    {
        //return SearchableFactory::new();
    }
}
