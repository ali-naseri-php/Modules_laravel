<?php

namespace Modules\Category\Http\Controllers\Api\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Category\Models\Category;
use Modules\Category\Services\Category\PropertieForCategoryServics;


class PropertiForController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(PropertieForCategoryServics $propertieForCategory)
    {
        $data=$propertieForCategory->all_properties();
        return response()->json([['data'=>$data->all()]]);
    }
}
