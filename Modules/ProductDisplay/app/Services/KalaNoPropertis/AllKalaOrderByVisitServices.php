<?php

namespace Modules\ProductDisplay\Services\KalaNoPropertis;

use Illuminate\Support\Facades\Cache;
use Modules\ProductManagement\Models\Category;
use \Modules\ProductDisplay\Models\Kala;


class AllKalaOrderByVisitServices
{
    protected $page;
    public $id_category;


    public function __construct($page,$id_category)
    {
        $this->page = $page;
        $this->id_category=$id_category;
    }


    public function all()
    {

        if ($this->page == 1) {
            $data = Cache::remember('kalaNoPropertis_visit', 120, function () {

                $data = Kala::LeftJoin('visit_kala', 'kalas.id', '=', 'visit_kala.id_kala')
                ->LeftJoin('properties_kalas', 'kalas.id', '=', 'properties_kalas.id_kala')
                ->LeftJoin('properties', 'properties_kalas.id_properit', '=', 'properties.id')
                ->LeftJoin('categorys', 'properties.id_category', '=', 'categorys.id')
                    ->where('categorys.id', '=', $this->id_category)
                    ->orderBy('visit_kala.number', 'DESC')
                    ->distinct()
                    ->groupBy( 'kalas.id','kalas.name','kalas.image1', 'kalas.price')
                    ->select('kalas.name','kalas.price','kalas.id','kalas.image1')
                    ->paginate(6);
                return $data;
            });

        } else {
            $data = Kala::LeftJoin('visit_kala', 'kalas.id', '=', 'visit_kala.id_kala')
                ->LeftJoin('properties_kalas', 'kalas.id', '=', 'properties_kalas.id_kala')
                ->LeftJoin('properties', 'properties_kalas.id_properit', '=', 'properties.id')
                ->LeftJoin('categorys', 'properties.id_category', '=', 'categorys.id')
                ->where('categorys.id', '=', $this->id_category)
                ->distinct()
                ->groupBy( 'kalas.id','kalas.name','kalas.image1', 'kalas.price')
                ->select('kalas.name','kalas.price','kalas.id','kalas.image1')
                ->orderBy('visit_kala.number', 'DESC')
                ->paginate(6);
        }
        return $data;

    }


}
