<?php

namespace Modules\ProductDisplay\Services\Kala;

use Illuminate\Support\Facades\Cache;
use Modules\ProductManagement\Models\Category;
use \Modules\ProductDisplay\Models\Kala;


class AllKalaOrderByVisitServices
{
    protected $page;

    public function __construct($page)
    {
        $this->page = $page;
    }


    public function all()
    {
        if ($this->page == 1) {
            $data = Cache::remember('kala_visit', 120, function () {
                //                sleep(5);
                $data = Kala::LeftJoin('visit_kala', 'kalas.id', '=', 'visit_kala.id_kala')
                    ->orderBy('visit_kala.number', 'DESC')
                    ->paginate(5);
                return $data;
            });

        } else {
            $data = Kala::LeftJoin('visit_kala', 'kalas.id', '=', 'visit_kala.id_kala')
                ->orderBy('visit_kala.number', 'DESC')
                ->paginate(5);
        }
        return $data->all();

    }


}
