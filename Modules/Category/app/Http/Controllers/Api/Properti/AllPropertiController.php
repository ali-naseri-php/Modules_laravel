<?php

namespace Modules\Category\Http\Controllers\Api\Properti;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Category\Services\Propertie\AllPropertieServies;

class AllPropertiController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(AllPropertieServies $allPropertieServies,Request $request)
    {
        return response()->json(['data' =>$allPropertieServies->all($request->page)->all()],200);

    }
}
