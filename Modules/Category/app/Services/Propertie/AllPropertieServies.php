<?php

namespace Modules\Category\Services\Propertie;

use Illuminate\Support\Facades\Cache;
use Modules\Category\Models\Category;
use Modules\Category\Models\Propertie;

class AllPropertieServies
{
    public function all($page)
    {
        //        dd($page);

        if ($page == 1 or $page==null) {

            $data = Cache::remember('propertei', 120, function () {
                //                sleep(5);
                $data= Propertie::with('category')->paginate(5);

                return $data;
            });

        } else {
            $data = Propertie::with('category')->paginate(5);
        }
        return $data;

    }
}


