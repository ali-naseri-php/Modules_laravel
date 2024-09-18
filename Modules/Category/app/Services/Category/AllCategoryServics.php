<?php

namespace Modules\Category\Services\Category;

use Modules\Category\Models\Category;


class  AllCategoryServics
{
    public function all_category($page=1)
    {
        return Category::orderBy('parent_category' ,'asc')->paginate(1);

    }


}
