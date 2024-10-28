<?php

namespace Modules\ProductDisplay\Livewire\Kala;

use Livewire\Component;
use Modules\ProductDisplay\Services\Kala\AllCategoryServices;
use Modules\ProductDisplay\Services\Kala\AllKalaServices;

class IndexKala extends Component
{
    public function mount()
    {
    }
    public function render(AllKalaServices $allKalaServices , AllCategoryServices $allCategoryServices)
    {
        return view('productdisplay::livewire.kala.index-kala',[
            'kala'=>$allKalaServices->all(),
            'categorys'=>$allCategoryServices->all(),
        ])->layout('productdisplay::layouts.app');
    }
}
