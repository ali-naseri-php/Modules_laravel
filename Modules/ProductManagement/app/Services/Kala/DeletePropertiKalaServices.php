<?php

namespace Modules\ProductManagement\Services\Kala;




use Modules\ProductManagement\Models\PropertieKala;

class DeletePropertiKalaServices
{


    public function deletes($id)
    {
        $st = PropertieKala::where('id_kala', $id)->delete();
        return $st;

    }


}
