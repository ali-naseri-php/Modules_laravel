<?php

namespace Modules\Category\Livewire\Category;

use Livewire\Component;
use Modules\Category\Models\Category;

class CreateCategory extends Component
{
    public $category;
    public $id;

    //    public $selectedCategory;
    public function mount($id)
    {
        if ($id != 0) {
            $this->category = (object)Category::find($id);
            $this->id = Category::find($id)->id;
        } else {
            $this->category = $id;
            $this->id = $id;
        }
    }

    public function render()
    {
        return view('category::livewire.category.create-category')->layout('homepagemodule::layouts.app');
    }
}
