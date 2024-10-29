<?php
namespace Modules\ProductDisplay\Services\Kala;

use Illuminate\Support\Facades\Cache;
use Modules\ProductManagement\Models\Category;
use \Modules\ProductDisplay\Models\Kala;


class AllKalaOrderByPriceLeastServices
{
    protected $page;
    public function __construct($page)
    {
        $this->page=$page;
    }


    public function all()
    {
        if ($this->page == 1 ) {
            $data = Cache::remember('kala_price_least', 120, function () {
                //                sleep(5);
                $data = Kala::orderBy('price')->paginate(5);
                return $data;
            });

        } else {
            $data = Kala::orderBy('price')->paginate(5);
        }
        return $data->all();

    }


}
