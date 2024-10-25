<?php

namespace Modules\ProductManagement\Services\Kala;

use Illuminate\Support\Facades\Cache;
use Modules\ProductManagement\Models\Category;
use Modules\ProductManagement\Models\Kala;
use Modules\ProductManagement\Models\Propertie;
use Modules\ProductManagement\Models\propertieKala;


class DeletePropertiKalaServices
{


    public function deletes($id)
    {

        $st = propertieKala::where('id_kala', $id)->delete();
        return $st;

    }


}
