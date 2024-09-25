<?php

namespace Modules\Category\Services\Category;


use Modules\Category\Models\Category;

class UpdateCategoryServices
{
    public function addCategory($data)
    {
        $category = Category::find($data['id']);
        if (isset($data['images'])) {
//            dd($data['images']);
            $file_name = time() . '.' . $data['images']->extension();

//            dd($file_name);
            $data['images']->move(public_path('images',), $file_name);
            $category->images = 'images/' .$file_name;
        }
        //        dd($file_name);
        //        dd(Category::find($data['id']));
        if ($data['parent_category']!=-1)
            $category->parent_category = $data['parent_category'];
        if (!$data['name']==null)
            $category->name =  $data['name'];
        $st = $category->save();

        return $st;


    }

}
