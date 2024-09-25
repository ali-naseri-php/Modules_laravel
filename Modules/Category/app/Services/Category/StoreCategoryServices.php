<?php

namespace Modules\Category\Services\Category;


use Modules\Category\Models\Category;

class StoreCategoryServices
{
    public function addCategory($data)
    {
        $file_name=$data['name'].'-'.time().'.'.$data['images']->extension();

//        dd($file_name);
        $data['images']->move(public_path('images',),$file_name);

        $category = new Category();
        $category->parent_category = $data['id'];
        $category->name = $data['name'];
        $category->images ='images/'.$file_name;
        $st = $category->save();

        return $st;


    }

}
