<?php

namespace Modules\ProductDisplay\Services\Kala;

use Illuminate\Support\Facades\Cache;
use Modules\ProductDisplay\Models\Category;


class AllCategoryServices
{
    public $page;

    public function __construct($page)
    {
        $this->page = $page;
    }


    public function all_category()
    {

            //                sleep(5);
            $data = Category::orderBy('parent_category', 'asc')->get();
            return $data;


        }


}
