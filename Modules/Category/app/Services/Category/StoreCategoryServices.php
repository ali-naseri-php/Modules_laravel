<?php

namespace Modules\Category\Services\Category;


use Modules\Category\Models\Category;

class StoreCategoryServices
{
    public function addCategory($data)
    {

        $category = new Category();
        $category->name = $data['name'];
        $category->parent_category = $data['id'];
        $category->name = $data['name'];
        $st = $category->save();

        return $st;


    }

}
