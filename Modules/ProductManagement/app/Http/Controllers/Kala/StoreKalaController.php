<?php

namespace Modules\ProductManagement\Http\Controllers\Kala;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\ProductManagement\Http\Requests\StoreKalaRequest;
use Modules\ProductManagement\Services\Kala\StoreKalaServices;

class StoreKalaController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreKalaRequest $request,StoreKalaServices $kalaServices)
    {        $statos = $kalaServices->store($request->all());

        if ($statos == 1)
            return redirect('kala')->with('success', 'ذخیره‌سازی با موفقیت انجام شد.');
        else
            return redirect('kala')->with('success', 'ذخیره‌سازی انجام نشد. لطفاً دوباره تلاش کنید لطفا با برنامه نویس ارشد تماس نمایید .');



    }
}
