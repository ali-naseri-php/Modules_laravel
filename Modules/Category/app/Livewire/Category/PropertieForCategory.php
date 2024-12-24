<?php

namespace Modules\Category\Livewire\Category;

use Illuminate\Http\Request;
use Livewire\Component;
use Modules\Category\Services\Category\PropertieForCategoryServics;

class PropertieForCategory extends Component
{

    public function render(PropertieForCategoryServics $propertieForCategory,Request $request)
    {
        return view('category::livewire.category.propertie-for-category',['PropertieForCategory'=>$propertieForCategory->all_properties($request->page)])->layout('homepagemodule::layouts.app');
    }
}
