<?php

namespace Modules\ProductManagement\Http\Controllers\Kala;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Modules\ProductManagement\Http\Requests\StoreKalaRequest;
use Modules\ProductManagement\Models\Kala;
use Modules\ProductManagement\Services\Kala\StoreKalaServices;

class StoreKalaController extends Controller
{
    public function __construct()
    {
        if (!Gate::allows('store', Kala::class)) {
           return abort(403);
        }

    }

    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreKalaRequest $request, StoreKalaServices $kalaServices)
    {
        $statos = $kalaServices->store($request->all());
        if ($statos == 1)
            return redirect('kala')->with('success', 'ذخیره‌سازی با موفقیت انجام شد.');
        else
            return redirect('kala')->with('success', 'ذخیره‌سازی انجام نشد. لطفاً دوباره تلاش کنید لطفا با برنامه نویس ارشد تماس نمایید .');


    }
}
