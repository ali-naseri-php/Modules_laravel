<?php

namespace Modules\ProductManagement\Services\Kala;

use Illuminate\Support\Facades\Cache;
use Modules\ProductManagement\Models\Category;
use Modules\ProductManagement\Models\Kala;
use Modules\ProductManagement\Models\propertieKala;


class SelectCtegoryForKalaServices
{
    protected $id;
    public function __construct($id_kala)
    {
        $this->id=$id_kala;
    }


    public function selects()
    {
        $category = Kala::join('properties_kalas', 'kalas.id', '=', 'properties_kalas.id_kala')->
        join('properties', 'properties_kalas.id_properit', '=', 'properties.id')->
        join('categorys', 'properties.id_category', '=', 'categorys.id')->
        where('kalas.id', '=', $this->id)->select('categorys.*')
            ->first();
        //dd('telegram and linkedin ali_naseri_php');
        return $category;

    }
    public  function name()
    {
$category=$this->selects();
return $category->name;

    }


}
