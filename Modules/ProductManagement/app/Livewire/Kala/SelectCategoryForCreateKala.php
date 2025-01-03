<?php

namespace Modules\ProductManagement\Livewire\Kala;

use Illuminate\Http\Request;
use Livewire\Component;
use Modules\ProductManagement\Services\Kala\AllCategoryServices;

class SelectCategoryForCreateKala extends Component
{
    public $id_category;

    public function render(AllCategoryServices $allCategoryServices)
    {

        return view('productmanagement::livewire.kala.select-category-for-create-kala', ['categorys' => $allCategoryServices->all()])->layout('homepagemodule::layouts.app');
    }


}
