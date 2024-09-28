<?php

namespace Modules\Category\Services\Propertie;


use Modules\Category\Models\Propertie;

class  UpdatePropertieServies
{
    public function update($data)
    {

        $properti=Propertie::find($data['id']);
        $properti->name=$data['name'];
        $properti->id_category=$data['id_category'];
        $statos=$properti->save();
        return $statos;


    }

}
