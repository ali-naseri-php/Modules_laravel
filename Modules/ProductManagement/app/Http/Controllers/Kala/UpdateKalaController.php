<?php

namespace Modules\ProductManagement\Http\Controllers\Kala;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;
use Modules\ProductManagement\Http\Requests\UpdateKalaRequest;
use Modules\ProductManagement\Models\Kala;
use Modules\ProductManagement\Services\Kala\DeletePropertiKalaServices;
use Modules\ProductManagement\Services\Kala\UpdateKalaServices;

class UpdateKalaController extends Controller
{
    public function __construct()
    {
        if (!Gate::allows('update', Kala::class)) {
            return abort(403);
        }
    }

    public function __invoke(UpdateKalaRequest $request , UpdateKalaServices $updateKalaServices)
    {
      $status=  $updateKalaServices->store($request->all());
        if ($status == 1)
            return redirect('kala')->with('success', 'تغیییرات  با موفقیت انجام شد.');
        else
            return redirect('kala')->with('success', 'تغیییرات انجام نشد. لطفاً دوباره تلاش کنید لطفا با برنامه نویس ارشد تماس نمایید .');



    }
}
