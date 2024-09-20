<?php

namespace Modules\Category\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Category\Http\Requests\Category\UpdateCategoryRequest;

use Modules\Category\Services\Category\UpdateCategoryServices;

class UpdateCategoryController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(UpdateCategoryRequest $request,UpdateCategoryServices $categoryServices)
    {
        $statos = $categoryServices->addCategory($request->all());
        if ($statos == 1)
            return redirect('category')->with('success', 'ذخیره‌سازی با موفقیت انجام شد.');
        else
            return redirect('category')->with('success', 'ذخیره‌سازی انجام نشد. لطفاً دوباره تلاش کنید لطفا با برنامه نویس ارشد تماس نمایید .');


    }
}
