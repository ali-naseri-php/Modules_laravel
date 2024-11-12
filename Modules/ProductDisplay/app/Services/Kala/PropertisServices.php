<?php

namespace Modules\ProductDisplay\Services\Kala;

use Illuminate\Support\Facades\Cache;
use Modules\ProductManagement\Models\Category;


class PropertisServices
{



    public function all()
    {
                $data = Properti::orderBy('parent_category', 'asc')->paginate(5);
//                return $data;





    }


}
