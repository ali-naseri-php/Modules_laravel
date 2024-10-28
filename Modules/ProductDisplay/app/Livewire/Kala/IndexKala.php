<?php

namespace Modules\ProductDisplay\Livewire\Kala;

use Illuminate\Http\Request;
use Livewire\Component;
use Modules\ProductDisplay\Providers\AllKalaOrderByNewDataProvider;
use Modules\ProductDisplay\Services\Kala\AllCategoryServices;
use Modules\ProductDisplay\Services\Kala\AllKalaOrderByNewDataServices;
use Modules\ProductDisplay\Services\Kala\AllKalaServices;

class IndexKala extends Component
{
    public $kalas;

    public function mount(Request $request)
    {
        //'قیمت  کم ترین '
        if ($request->q == 2) {
            dd('قیمت  کم ترین ');
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

    public function order_by_new()
    {
        // بارگذاری تنبل سرویس فقط هنگام نیاز
        $allKalaOrderByNewDataServices = resolve(AllKalaOrderByNewDataServices::class);
        $this->kalas = (array)$allKalaOrderByNewDataServices->all();

    }

    public function render(AllKalaServices $allKalaServices, AllCategoryServices $allCategoryServices)
    {
        return view('productdisplay::livewire.kala.index-kala', [
            'kala' => $this->kalas,
            'categorys' => $allCategoryServices->all(),
        ])->layout('productdisplay::layouts.app');
    }
}
