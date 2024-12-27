<?php

namespace Modules\ProductDisplay\Livewire\Kala;

use Livewire\Component;
use Modules\ProductDisplay\Services\Kala\AllKalaOrderByNewDataServices;
use Modules\ProductDisplay\Services\Kala\AllKalaServices;

class ProductHomePage extends Component
{


    public function render(AllKalaServices $allKalaServices)
    {

        return view('productdisplay::livewire.kala.product-home-page', [
            'kala' => $allKalaServices->all(),
        ])->layout('homepagemodule::layouts.app');
    }

}
