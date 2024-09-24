<?php

namespace Modules\Category\Http\Controllers\Propertie;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Category\Http\Requests\Propertie\StorePropertieRequest;
use Modules\Category\Services\Propertie\StorePropertieServices;

class StorePropertieController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StorePropertieRequest $request,StorePropertieServices $storeCategoryServices)
    {
        $statos=$storeCategoryServices->addPropertie($request->all());
        if ($statos == 1)
            return redirect('propertie')->with('success', 'ذخیره‌سازی با موفقیت انجام شد.');
        else
            return redirect('propertie')->with('success', 'ذخیره‌سازی انجام نشد. لطفاً دوباره تلاش کنید لطفا با برنامه نویس ارشد تماس نمایید .');


    }
}
