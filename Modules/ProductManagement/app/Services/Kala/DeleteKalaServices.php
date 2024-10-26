<?php

namespace Modules\ProductManagement\Services\Kala;

use Illuminate\Support\Facades\Cache;
use Modules\ProductManagement\Models\Category;
use Modules\ProductManagement\Models\Kala;
use Modules\ProductManagement\Models\propertieKala;


class DeleteKalaServices
{
    public  $id;

public function __construct($id)
{
    $this->id=$id;
}
    public function delete()
    {
        $kala_destroy=Kala::whrere('id',$this->id)->delete();
return $kala_destroy;


    }


}
