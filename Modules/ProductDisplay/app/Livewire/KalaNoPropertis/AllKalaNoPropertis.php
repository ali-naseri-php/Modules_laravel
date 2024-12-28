<?php

namespace Modules\ProductDisplay\Livewire\KalaNoPropertis;

use Illuminate\Http\Request;
use Livewire\Component;
use Modules\ProductDisplay\Http\Requests\AllKalaNoPropertisRequest;
use Modules\ProductDisplay\Services\Kala\Properti_kalaServices;
use Modules\ProductDisplay\Services\Kala\PropertiswithwhereServices;
use Modules\ProductDisplay\Services\KalaNoPropertis\AllKalaOrderByNewServices;
use Modules\ProductDisplay\Services\KalaNoPropertis\AllKalaOrderByPriceLeastServices;
use Modules\ProductDisplay\Services\KalaNoPropertis\AllKalaOrderByPriceMostServices;
use Modules\ProductDisplay\Services\KalaNoPropertis\AllKalaOrderByVisitServices;

class AllKalaNoPropertis extends Component
{
    protected $kalas;
protected $id_category;
    public function mount(AllKalaNoPropertisRequest $request)
    {
        $this->id_category=$request->id_category;
        //'قیمت  کم ترین '
        if ($request->q == 2) {
            $this->order_by_price_least();
        } //'قیمت بیشترین '
        elseif ($request->q == 3) {
            $this->order_by_price_most();
        } //"بر اساس بازدی "
        elseif ($request->q == 4) {
            $this->order_by_visit();
        } else {
            //اگر چیزی نبود این خواهد امد   عینی پارامتر در url نبود
            $this->order_by_new();
        }
    }

    public function order_by_price_least()
    {
        $kala = resolve(AllKalaOrderByPriceLeastServices::class);
        $this->kalas = $kala->all();
//        dd($this->kalas);
    }

    public function order_by_price_most()
    {
        $kala = resolve(AllKalaOrderByPriceMostServices::class);
        $this->kalas = $kala->all();
//        dd($this->kalas);


    }


    public function order_by_new()
    {
        $kala = resolve(AllKalaOrderByNewServices::class);
        $this->kalas = $kala->all();
        //        dd('ali naseri');
//        dd($this->kalas);

    }

    public function order_by_visit()
    {
        $kala = resolve(AllKalaOrderByVisitServices::class);
        $this->kalas = $kala->all();
//        dd($this->kalas);

    }

    public function render(PropertiswithwhereServices $services)
    {

        return view('productdisplay::livewire.kala-category.all-propertis-kala',[
            'kalas'=>$this->kalas,
            'propertis' => $services->all($this->id_category),
        ])->layout('homepagemodule::layouts.app');
    }
    public function selectKalaProperti($id_properti)
    {
        $pro = resolve(Properti_kalaServices::class);
        return $pro->all($id_properti);

    }
}
