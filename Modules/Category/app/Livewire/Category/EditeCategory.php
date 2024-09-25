<?php

namespace Modules\Category\Livewire\Category;

use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithPagination;
use Modules\Category\Services\Category\AllCategoryServics;
use Modules\Category\Services\Category\ShowCategoryServics;

class EditeCategory extends Component
{
    use WithPagination;

    public $name, $parent_category;
    public $id;


    public function mount($id)
    {
        $this->id = $id;
    }

    // متد برای زمانی که parent_category تغییر می‌کند


    public function render(AllCategoryServics $allCategoryServics, ShowCategoryServics $showCategoryServics,Request $request)
    {
        return view('category::livewire.category.edite-category', [
            'categorys' => $allCategoryServics->all_category(),
            'date' => $showCategoryServics->show($this->id),
            'page'=>$request->page
        ])->layout('category::layouts.app');
    }
}
