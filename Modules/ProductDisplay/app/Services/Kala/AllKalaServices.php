<?php
namespace Modules\ProductDisplay\Services\Kala;

use Illuminate\Support\Facades\Cache;
use Modules\ProductManagement\Models\Category;
use \Modules\ProductDisplay\Models\Kala;


class AllKalaServices
{
    protected $page;
    public function __construct($page)
    {
        $this->page=$page;
    }


    public function all()
    {
        if ($this->page == 1 ) {
            $data = Cache::remember('kala', 120, function () {
                //                sleep(5);
                $data = Kala::paginate(4);
                return $data;
            });

        } else {
            $data = Category::orderBy('parent_category', 'asc')->paginate(4);
        }
        return $data;

    }


}
