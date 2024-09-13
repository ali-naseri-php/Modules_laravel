<?php

namespace Modules\Category\Livewire\Category;


use Illuminate\Http\Request;
use Livewire\Component;
use Modules\Category\Models\Category;
use Modules\Category\Services\Category\AllCategoryServics;

class AllCategory extends Component
{

    public function mount()
    {

    }


    public function render(AllCategoryServics $allServices,Request $request)
    {
        return view('category::livewire.category.all-category',['category'=>$allServices->ali_category($request->page)])->layout('category::layouts.app');
    }
}
