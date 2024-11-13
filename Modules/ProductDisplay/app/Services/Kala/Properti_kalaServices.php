<?php

namespace Modules\ProductDisplay\Services\Kala;

use Illuminate\Support\Facades\Cache;
use Modules\ProductDisplay\Models\Propertie;
use Modules\ProductDisplay\Models\propertie_kala;
use Modules\ProductManagement\Models\Category;


class PropertisServices
{


    public function all($id_propertie)
    {
        $data =propertie_kala::where('id_propertie','=',$id_propertie);
        return $data;


    }


}
