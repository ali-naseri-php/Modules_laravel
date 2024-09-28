<?php

namespace Modules\Category\Http\Controllers\Propertie;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Category\Http\Requests\Propertie\UpdatePropertieRequest;
use Modules\Category\Services\Propertie\UpdatePropertieServies;

class UpdatePropertieController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(UpdatePropertieServies $updatePropertieServies, UpdatePropertieRequest $request)
    {
//        dd($request->all());

        $statos=$updatePropertieServies->update($request->all());
        if ($statos == 1)
            return redirect('propertie')->with('success', 'ذخیره‌سازی با موفقیت انجام شد.');
        else
            return redirect('propertie')->with('success', 'ذخیره‌سازی انجام نشد. لطفاً دوباره تلاش کنید لطفا با برنامه نویس ارشد تماس نمایید .');


    }
}
