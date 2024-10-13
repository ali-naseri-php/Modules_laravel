<?php

namespace Modules\Category\Livewire\Category;


use Livewire\Component;
use Modules\Category\Services\Category\AllCategoryServics;

class AllCategory extends Component
{

    public function mount()
    {

    }


    public function render(AllCategoryServics $allServices)
    {
        return view('category::livewire.category.all-category',['category'=>$allServices->all_category()])->layout('category::layouts.app');
    }
}
