<?php

namespace Modules\ProductManagement\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Category\Database\Factories\PropertieFactory;
use Modules\Category\Models\Category;

class Propertie extends Model
{
    use SoftDeletes;
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

    public function nameCategory()
    {
        $propertiname=$this->category()->get();
//dd($propertiname[0]->name);

        return $propertiname[0]->name;

}

    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category','id');
    }
}
