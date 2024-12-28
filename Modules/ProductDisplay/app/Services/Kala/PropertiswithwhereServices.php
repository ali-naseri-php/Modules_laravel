<?php

namespace Modules\ProductDisplay\Services\Kala;

use Illuminate\Support\Facades\Cache;
use Modules\ProductDisplay\Models\Propertie;
use Modules\ProductManagement\Models\Category;
use function Laravel\Prompts\select;


class PropertiswithwhereServices
{


    public function all($id)
    {
        $data = Propertie::
        join('categorys','properties.id_category','=','categorys.id')
            ->where('categorys.id',$id)->
            select('properties.*')
        ->get();
//        dd($data);
        return $data;


    }


}
