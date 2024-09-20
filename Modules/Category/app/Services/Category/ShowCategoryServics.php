<?php

namespace Modules\Category\Services\Category;

use Modules\Category\Models\Category;


class  ShowCategoryServics
{
    public function show($id)
    {
        return Category::find($id);

    }


}
