<?php

namespace Modules\Category\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Modules\Category\Http\Requests\Category\StoreCategoryRequest;
use Modules\Category\Models\Category;
use Modules\Category\Services\Category\StoreCategoryServices;

class StoreCategoryController extends Controller
{
    public function __construct()
    {
        if (!Gate::allows('store', Category::class)) {
            return abort(403);
        }
    }

    public function __invoke(StoreCategoryRequest $request, StoreCategoryServices $categoryServices)
    {

        $statos = $categoryServices->addCategory($request->all());
        if ($statos == 1)
            return redirect('category')->with('success', 'ذخیره‌سازی با موفقیت انجام شد.');
        else
            return redirect('category')->with('success', 'ذخیره‌سازی انجام نشد. لطفاً دوباره تلاش کنید لطفا با برنامه نویس ارشد تماس نمایید .');


    }
}
