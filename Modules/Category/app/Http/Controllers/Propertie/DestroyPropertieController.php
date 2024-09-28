<?php

namespace Modules\Category\Http\Controllers\Propertie;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Category\Services\Propertie\DestroyPropertieServies;

class DestroyPropertieController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(DestroyPropertieServies $destroyPropertieServies ,$id)
    {
$status=        $destroyPropertieServies->destroy($id);
        if ($status == 1)
            return redirect('propertie')->with('success', 'ذخیره‌سازی با موفقیت انجام شد.');
        else
            return redirect('propertie')->with('success', 'ذخیره‌سازی انجام نشد. لطفاً دوباره تلاش کنید لطفا با برنامه نویس ارشد تماس نمایید .');



    }
}
