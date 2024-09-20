<?php

namespace Modules\Category\Services\Category;


use Modules\Category\Models\Category;

class UpdateCategoryServices
{
    public function addCategory($data)
    {

//        dd(Category::find($data['id']));
        $category = Category::find($data['id']);
        $category->parent_category = $data['parent_category'];
        $category->name = $data['name'];
        $st = $category->save();

        return $st;


    }

}
