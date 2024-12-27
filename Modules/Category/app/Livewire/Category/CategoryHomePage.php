<?php

namespace Modules\Category\Livewire\Category;

use Livewire\Component;
use Modules\Category\Models\Category;

class CategoryHomePage extends Component
{
    public $categories;

    public function render()
    {

        $this->categories = Category::take(8)->get();
        return view('category::livewire.category.category-home-page');
    }
}
