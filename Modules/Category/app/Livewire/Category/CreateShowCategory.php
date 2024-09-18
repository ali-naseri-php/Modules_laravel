<?php

namespace Modules\Category\Livewire\Category;

use Illuminate\Http\Request;
use Livewire\Component;
use Modules\Category\Services\Category\AllCategoryServics;

class CreateShowCategory extends Component
{
    public $category_create;
    public $page;

    public function mount(Request $request)
    {
        $this->page = $request->page ?? 1;
    }

    public function render(AllCategoryServics $category, Request $request)
    {
        return view('category::livewire.category.create-show-category', [
            'categorys' => $category->all_category($this->page),
            'page' => $this->page
        ])->layout('category::layouts.app');
    }

    public function submit()
    {$id=$this->category_create==null?0:$this->category_create;



        return redirect('category/create/' . $id);
    }
}
