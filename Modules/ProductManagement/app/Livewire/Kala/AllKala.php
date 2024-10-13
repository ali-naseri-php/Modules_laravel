<?php

namespace Modules\ProductManagement\Livewire\Kala;

use Livewire\Component;
use Modules\ProductManagement\Services\Kala\AllKalaServices;


class AllKala extends Component
{

    public function render(AllKalaServices $allKalaServices)
    {

        return view('productmanagement::livewire.kala.all-kala',['kala'=>$allKalaServices->all()])->layout('category::layouts.app');
    }
}
