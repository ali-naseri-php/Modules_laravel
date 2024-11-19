<?php

namespace Modules\ProductDisplay\Livewire\KalaWithPropertis;

use Livewire\Component;
use Modules\ProductDisplay\Http\Middleware\CheckPropertiesMiddleware;
use Modules\ProductDisplay\Http\Requests\AllKalaNoPropertisRequest;
use Modules\ProductDisplay\Http\Requests\AllKalaWithPropertisRequest;
use Modules\ProductDisplay\Services\KalaWithPropertis\AllKalaOrderByNewServices;
use Modules\ProductDisplay\Services\KalaWithPropertis\AllKalaOrderByPriceLeastServices;
use Modules\ProductDisplay\Services\KalaWithPropertis\AllKalaOrderByPriceMostServices;
use Modules\ProductDisplay\Services\KalaWithPropertis\AllKalaOrderByVisitServices;

class AllKalaWithPropertis extends Component
{
    public $kalas;
    protected $nams;


    public function mount(AllKalaWithPropertisRequest $request)
    {
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
        dd($this->kalas);
    }

    public function order_by_price_most()
    {
        $kala = resolve(AllKalaOrderByPriceMostServices::class);
        $this->kalas = $kala->all($this->nams);
        dd($this->kalas);


    }


    public function order_by_new()
    {
        $kala = resolve(AllKalaOrderByNewServices::class);
        $this->kalas = $kala->all($this->nams);
        //        dd('ali naseri');
        dd($this->kalas);

    }

    public function order_by_visit()
    {
                $kala = resolve(AllKalaOrderByVisitServices::class);
        $this->kalas = $kala->all($this->nams);
        dd($this->kalas);

    }

    public function render()
    {

        return view('productdisplay::livewire.kala-category.all-propertis-kala')->layout('productdisplay::layouts.app');
    }
}
