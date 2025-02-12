<?php

namespace Modules\ProductDisplay\Services\Kala;

use Modules\ProductDisplay\Models\Propertie;


class PropertisServices
{


    public function all()
    {
        $data = Propertie::orderBy('name', 'asc')->paginate(5);
        return $data;


    }


}
