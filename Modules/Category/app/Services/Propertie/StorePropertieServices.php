<?php

namespace Modules\Category\Services\Propertie;


use Modules\Category\Models\Propertie;

class StorePropertieServices
{
    public function addPropertie( $data)
    {
        $propertie  = new  Propertie;
        $propertie->name = $data['name'];
        $propertie->id_category = $data['id_category'];
        $st = $propertie->save();
        return $st;


    }

}




