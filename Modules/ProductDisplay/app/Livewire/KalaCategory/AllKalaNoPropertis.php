<?php

namespace Modules\ProductDisplay\Livewire\KalaCategory;

use Illuminate\Http\Request;
use Livewire\Component;
use Modules\ProductDisplay\Http\Requests\AllKalaNoPropertisRequest;
use Modules\ProductDisplay\Services\KalaNoPropertis\AllKalaOrderByVisitServices;

class AllKalaNoPropertis extends Component
{
    public  $kalas;
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
            $this->order_by_new();
        }

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
