<?php

namespace Modules\ProductManagement\Services\Kala;


use Modules\ProductManagement\Models\Propertie;


class PropertiForKalaServices
{
    protected $id_category;

    public function __construct($id_category)
    {
        $this->id_category = $id_category;
    }


    public function all($id_category=null)
    {
        if ($id_category==null) {
            $data = Propertie::join('categorys', 'properties.id_category', '=', 'categorys.id')
                ->select('properties.id', 'properties.name')
                ->where('properties.id_category', '=', $this->id_category)
                ->get();
            //        dd($data);
            return $data;
        }
        else{
            $data = Propertie::join('categorys', 'properties.id_category', '=', 'categorys.id')
                ->select('properties.id', 'properties.name')
                ->where('properties.id_category', '=', $id_category)
                ->get();
            //        dd($data);
            return $data;


        }
    }


}
