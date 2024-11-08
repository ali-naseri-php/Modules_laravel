<?php
namespace Modules\ProductDisplay\Services\KalaCategory;

use Illuminate\Support\Facades\Cache;
use Modules\ProductManagement\Models\Category;


class AllCategoryServices
{
    public function all()
    {


            $data = Cache::remember('category', 10, function () {

                $data = Category::inRandomOrder(10)->get();
                return $data;
            });


//        dd($data);
        return $data;

    }


}
