<?php

namespace Modules\ProductDisplay\Livewire\KalaWithPropertis;

use Livewire\Component;
use Modules\ProductDisplay\Http\Middleware\CheckPropertiesMiddleware;
use Modules\ProductDisplay\Http\Requests\AllKalaNoPropertisRequest;
use Modules\ProductDisplay\Http\Requests\AllKalaWithPropertisRequest;

use Modules\ProductDisplay\Services\Kala\Properti_kalaServices;
use Modules\ProductDisplay\Services\Kala\PropertiswithwhereServices;
use Modules\ProductDisplay\Services\KalaWithPropertis\AllKalaOrderByNewServices;
use Modules\ProductDisplay\Services\KalaWithPropertis\AllKalaOrderByPriceLeastServices;
use Modules\ProductDisplay\Services\KalaWithPropertis\AllKalaOrderByPriceMostServices;
use Modules\ProductDisplay\Services\KalaWithPropertis\AllKalaOrderByVisitServices;

class AllKalaWithPropertis extends Component
{
    protected $kalas;
    protected $nams;
    protected $id_category;


    public function mount(AllKalaWithPropertisRequest $request)
    {
//        dd($request->all());
        $this->id_category = $request->id_category;
        $this->nams = $request->properties;
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
        $this->kalas = $kala->all($this->nams);

    }

    public function order_by_price_most()
    {
        $kala = resolve(AllKalaOrderByPriceMostServices::class);
        $this->kalas = $kala->all($this->nams);
//        dd($this->kalas);


    }


    public function order_by_new()
    {
        $kala = resolve(AllKalaOrderByNewServices::class);
        $this->kalas = $kala->all($this->nams);
        //        dd('ali naseri');
//        dd($this->kalas);

    }

    public function order_by_visit()
    {
        $kala = resolve(AllKalaOrderByVisitServices::class);
        $this->kalas = $kala->all($this->nams);
//        dd($this->kalas);

    }

    public function render(PropertiswithwhereServices $services)
    {


        return view('productdisplay::livewire.kala-category.all-propertis-kala', [
            'propertis' => $services->all($this->id_category),
'kalas'=>$this->kalas
        ])->layout('homepagemodule::layouts.app');
    }

    public function selectKalaProperti($id_properti)
    {
        $pro = resolve(Properti_kalaServices::class);
        return $pro->all($id_properti);

    }
}
