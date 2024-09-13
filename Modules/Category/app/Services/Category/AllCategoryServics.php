<?php

namespace Modules\Category\Services\Category;

use Modules\Category\Models\Category;


class  AllCategoryServics
{
    public function ali_category($page=1)
    {
        return Category::paginate(5);

    }


}
