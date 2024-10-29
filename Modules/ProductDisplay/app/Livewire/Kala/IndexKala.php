<?php

namespace Modules\ProductDisplay\Livewire\Kala;

use Illuminate\Http\Request;
use Livewire\Component;
use Modules\ProductDisplay\Services\Kala\AllCategoryServices;
use Modules\ProductDisplay\Services\Kala\AllKalaOrderByNewDataServices;
use Modules\ProductDisplay\Services\Kala\AllKalaOrderByPriceLeastServices;
use Modules\ProductDisplay\Services\Kala\AllKalaServices;

class IndexKala extends Component
{
    public $kalas;

    public function mount(Request $request)
    {
        //'قیمت  کم ترین '
        if ($request->q == 2) {
            $this->order_by_price_least();
        } //'قیمت بیشترین '
        elseif ($request->q == 3) {


            dd('قیمت بیشترین ');
        } //"بر اساس بازدی "
        elseif ($request->q == 4) {
            dd("بر اساس بازدی ");
        } else {
            $this->order_by_new();
        }

    }
    public function order_by_price_least()
    {
        // بارگذاری تنبل سرویس فقط هنگام نیاز
        $kala = resolve(AllKalaOrderByPriceLeastServices::class);
        $this->kalas = $kala->all();


    }

    public function order_by_new()
    {
        // بارگذاری تنبل سرویس فقط هنگام نیاز
        $kala = resolve(AllKalaOrderByNewDataServices::class);
        $this->kalas = $kala->all();

    }

    public function render(AllKalaServices $allKalaServices, AllCategoryServices $allCategoryServices)
    {
        return view('productdisplay::livewire.kala.index-kala', [
            'kala' => $this->kalas,
            'categorys' => $allCategoryServices->all(),
        ])->layout('productdisplay::layouts.app');
    }
}