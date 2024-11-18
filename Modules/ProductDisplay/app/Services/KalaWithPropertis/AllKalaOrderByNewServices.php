<?php

namespace Modules\ProductDisplay\Services\KalaWithPropertis;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Modules\ProductManagement\Models\Category;
use \Modules\ProductDisplay\Models\Kala;


class AllKalaOrderByNewServices
{
    protected $page;
    public $id_category;
    public $nams;
    public $names;


    public function __construct($page, $id_category)
    {
        $this->page = $page;
        $this->id_category = $id_category;
    }


    public function all($nams)
    {
        $this->nams = $nams;


        if ($this->page == 1) {
            $data = Cache::remember('kalaWithPropertis_LestPrice' . implode('-', $this->nams), 1, function () {
                //                                dd('ali' );
                //                foreach ($this->nams as $index => $id) {
                //                    $this->names[] = array(['properties_kalas.name' => $id]);
                //                }
                //                $fullJooin = DB::table('kalas')->join('properties_kalas', 'kalas.id', '=', 'properties_kalas.id_kala');
                //               dd( );
                $data = Kala::select('kalas.id', 'kalas.name','kalas.price')
                    ->join('properties_kalas', 'kalas.id', '=', 'properties_kalas.id_kala')
                    ->join('properties', 'properties_kalas.id_properit', '=', 'properties.id')
                    ->join('categorys', 'properties.id_category', '=', 'categorys.id')
                    ->where('categorys.id', '=', $this->id_category)
                    ->whereIn('properties_kalas.name', $this->nams) // استفاده از whereIn به جای where برای مقادیر مختلف
                    ->groupBy('kalas.id', 'kalas.name','price')
                    ->havingRaw('COUNT(DISTINCT properties_kalas.id) = ?', [count($this->nams)]) // استفاده از پارامتر به جای `count($this->nams)`
                    ->orderBy('kalas.created_at')
                    ->paginate(5);

                return $data;
            });

        } else {
            $data = Kala::LeftJoin('visit_kala', 'kalas.id', '=', 'visit_kala.id_kala')
                ->orderBy('visit_kala.number', 'DESC')
                ->paginate(5);
        }
        //        dd('ali naseri');
        return $data->all();

    }


}
