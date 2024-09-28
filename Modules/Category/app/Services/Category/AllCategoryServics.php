<?php

namespace Modules\Category\Services\Category;

use Illuminate\Support\Facades\Cache;
use Modules\Category\Models\Category;


class  AllCategoryServics
{
    public function all_category($page = 1)
    {
        if ($page == 1 or $page==null) {

            $data = Cache::remember('category', 120, function () {
//                sleep(5);
                $data= Category::orderBy('parent_category', 'asc')->paginate(2);
                return $data;
            });

        } else {
            $data = Category::orderBy('parent_category', 'asc')->paginate(2);
        }
        return $data;

    }


}
