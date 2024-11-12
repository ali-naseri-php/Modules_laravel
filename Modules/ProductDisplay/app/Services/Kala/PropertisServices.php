<?php

namespace Modules\ProductDisplay\Services\Kala;

use Illuminate\Support\Facades\Cache;
use Modules\ProductDisplay\Models\Propertie;
use Modules\ProductManagement\Models\Category;


class PropertisServices
{


    public function all()
    {
        $data = Propertie::orderBy('parent_category', 'asc')->paginate(5);
        return $data;


    }


}
