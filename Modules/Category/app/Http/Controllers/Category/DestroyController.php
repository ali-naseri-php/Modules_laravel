<?php

namespace Modules\Category\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Modules\Category\Models\Category;
use Modules\Category\Services\Category\DestroyCategoryServices;

class DestroyController extends Controller
{
    public function __construct()
    {
        if (!Gate::allows('delete', Category::class)) {
            return abort(403);
        }
    }

    /**
     * Handle the incoming request.
     */
    public function __invoke($id,DestroyCategoryServices $categoryServices)
    {
        $statos=$categoryServices->destroy($id);
        if ($statos == 1)
            return redirect('category')->with('success', 'تغیییرات  با موفقیت انجام شد.');
        else
            return redirect('category')->with('success', 'تغیییرات انجام نشد. لطفاً دوباره تلاش کنید لطفا با برنامه نویس ارشد تماس نمایید .');




    }
}
