<?php

namespace Modules\ProductDisplay\Livewire\KalaNoPropertis;

use Illuminate\Http\Request;
use Livewire\Component;
use Modules\ProductDisplay\Http\Requests\AllKalaNoPropertisRequest;
use Modules\ProductDisplay\Services\KalaNoPropertis\AllKalaOrderByNewServices;
use Modules\ProductDisplay\Services\KalaNoPropertis\AllKalaOrderByPriceLeastServices;
use Modules\ProductDisplay\Services\KalaNoPropertis\AllKalaOrderByPriceMostServices;
use Modules\ProductDisplay\Services\KalaNoPropertis\AllKalaOrderByVisitServices;

class AllKalaNoPropertis extends Component
{
    public $kalas;

    public function mount(AllKalaNoPropertisRequest $request)
    {
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
        dd($this->kalas);
    }

    public function order_by_price_most()
    {
        $kala = resolve(AllKalaOrderByPriceMostServices::class);
        $this->kalas = $kala->all();
        dd($this->kalas);


    }


    public function order_by_new()
    {
        $kala = resolve(AllKalaOrderByNewServices::class);
        $this->kalas = $kala->all();
        //        dd('ali naseri');
        dd($this->kalas);

    }

    public function order_by_visit()
    {
        $kala = resolve(AllKalaOrderByVisitServices::class);
        $this->kalas = $kala->all();
        dd($this->kalas);

    }

    public function render()
    {

        return view('productdisplay::livewire.kala-category.all-propertis-kala')->layout('productdisplay::layouts.app');
    }
}
