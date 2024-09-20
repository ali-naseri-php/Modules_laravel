<?php

namespace Modules\Category\Services\Category;


use Modules\Category\Models\Category;

class DestroyCategoryServices
{
    public function destroy($id)
    {
        $category = Category::find($id);
       $st= $category->delete();

        return $st;


    }

}
