<?php

namespace Modules\ProductManagement\Services\Kala;

use Illuminate\Support\Facades\Cache;
use Modules\ProductManagement\Models\Category;


class AllCategoryServices
{
    protected $page;
    public function __construct($page)
    {
        $this->page=$page;
    }


    public function all()
    {
        if ($this->page == 1 ) {

            $data = Cache::remember('category', 120, function () {
                //                sleep(5);
                $data = Category::orderBy('parent_category', 'asc')->paginate(5);
                return $data;
            });

        } else {
            $data = Category::orderBy('parent_category', 'asc')->paginate(5);
        }
        return $data;

    }


}
