<?php

namespace Modules\ProductDisplay\Livewire;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Livewire\Component;
use Modules\ProductDisplay\Services\Kala\ShowKalaServices;

class ShowProduct extends Component
{
    public $product;
    public  function mount($id, ShowKalaServices $showKalaServices)
    {

    $this->product=    $showKalaServices->all($id);
    }
    public function render()
    {
        return view('productdisplay::livewire.show-product',['product'=>$this->product])->layout('homepagemodule::layouts.app');
    }
}
