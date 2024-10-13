<?php

namespace Modules\ProductManagement\Services\Kala;

use Illuminate\Support\Facades\Cache;

use Modules\ProductManagement\Models\Kala;

class AllKalaServices
{


    public function all($page=1)
    {
        if ($page == 1 or $page == null) {

            $data = Cache::remember('kala', 120, function () {
                //                sleep(5);
                $data = Kala::paginate(10);
                return $data;
            });

        } else {
            $data = Kala::paginate(10);
        }
        return $data;

    }


}
