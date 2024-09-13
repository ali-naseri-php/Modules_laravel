<?php

namespace Modules\Category\Services\Category;

use Modules\Category\Models\Category;

class PropertieForCategoryServics{
    protected $category;
    public function __construct($category)
    {
        $this->category=$category;

}
    public function all_properties($page=1){
        return Category::find($this->category)->properties()->paginate(10);





    }





}
