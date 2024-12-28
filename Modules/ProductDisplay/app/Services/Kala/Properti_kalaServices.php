<?php

namespace Modules\ProductDisplay\Services\Kala;

use Illuminate\Support\Facades\Cache;
use Modules\ProductDisplay\Models\Propertie;
use Modules\ProductDisplay\Models\propertie_kala;
use Modules\ProductDisplay\Models\PropertieKala;
use Modules\ProductManagement\Models\Category;
use function Laravel\Prompts\select;


class Properti_kalaServices
{


    public function all($id_propertie)
    {
        $data =PropertieKala::
        where('id_properit','=',$id_propertie)
            ->join('kalas','properties_kalas.id_kala','=','kalas.id')
            ->select('properties_kalas.*')
            ->orderBy('kalas.id')
                ->get();
        return $data;


    }


}
