<?php
namespace Modules\ProductDisplay\Services\Kala;

use Illuminate\Support\Facades\Cache;
use Modules\ProductManagement\Models\Category;
use \Modules\ProductDisplay\Models\Kala;


class ShowKalaServices

{




    public function all($id)
    {


        return  Kala::find($id);


    }


}
