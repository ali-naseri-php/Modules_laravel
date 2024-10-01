<?php

namespace Modules\Category\Http\Controllers\Api\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Category\Services\Category\AllCategoryServics;

class AllCategoryController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(AllCategoryServics $allCategoryServics,Request $request)
    {
  $data= $allCategoryServics->all_category($request->page);
  return response()->json(['data'=>$data->all()],200);

    }
}
