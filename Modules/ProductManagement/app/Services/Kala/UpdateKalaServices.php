<?php

namespace Modules\ProductManagement\Services\Kala;

use Modules\ProductManagement\Models\Kala;
use Modules\ProductManagement\Models\PropertieKala;


class UpdateKalaServices
{
    public $id;
    public  $deletePropertiKalaServices ;

    public function __construct($id, DeletePropertiKalaServices $deletePropertiKalaServices )
    {
        $this->id = $id;
        $this->deletePropertiKalaServices = $deletePropertiKalaServices ;
    }


    public function store( $data )
    {

        $this->deletePropertiKalaServices->deletes($this->id);

        $kala = Kala::find($this->id);


        //        for ($i=1;$i<3 ;$i++) {
        //
        //        $file_name=$data['name'].$i.'-'.time().'.'.$data['image'.$i]->extension();
        //        $data['image'.$i]->move(public_path('image'.$i),$file_name);
        //            $kala->image.$i ='images/'.$file_name;
        //        }
        $file_name = $data['name'] . '1' . '-' . time() . '.' . $data['image1']->extension();
        $data['image1']->move(public_path('image1'), $file_name);
        $kala->image1 = 'images/' . $file_name;
        $file_name = $data['name'] . '2' . '-' . time() . '.' . $data['image2']->extension();
        $data['image2']->move(public_path('image2'), $file_name);
        $kala->image2 = 'images/' . $file_name;
        $kala->name = $data['name'];
        $kala->explanation = $data['explanation'];
        $kala->price = $data['price'];
        $status = $kala->save();
        if (is_array($data['propertis'])) {

            foreach ($data['propertis'] as $key => $value) {
                $kalapro = new PropertieKala();
                $kalapro->name = $value;
                $kalapro->id_properit = $key;
                $kalapro->id_kala = $kala->id;
                $kalapro->save();

            }
        }
        return $status;


    }


}
