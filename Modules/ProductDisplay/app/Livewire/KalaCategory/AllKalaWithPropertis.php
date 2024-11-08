<?php

namespace Modules\ProductDisplay\Livewire\KalaCategory;

use Livewire\Component;

class AllKalaWithPropertis extends Component
{
    public function render()
    {

        return view('productdisplay::livewire.kala-category.all-propertis-kala')->layout('productdisplay::layouts.app');
    }
}
