<?php

namespace Modules\ProductManagement\Http\Controllers\Kala;

use App\Http\Controllers\Controller;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;
use Modules\ProductManagement\Http\Requests\StoreKalaRequest;
use Modules\ProductManagement\Models\Kala;
use Modules\ProductManagement\Services\Kala\DeleteKalaServices;
use Modules\ProductManagement\Services\Kala\StoreKalaServices;

class DeleteKalaController extends Controller
{
    public function __construct()
    {
        if (!Gate::allows('delete', Kala::class)) {
            return abort(403);
        }

    }
    /**
     * Handle the incoming request.
     */

    public function __invoke(DeleteKalaServices $kalaServices)
    {
        $statos = $kalaServices->delete();

        if ($statos == 1)
            return redirect('kala')->with('success', 'حذف با موفقیت انجام شد.');
        else
            return redirect('kala')->with('success', 'حذف انجام نشد. لطفاً دوباره تلاش کنید لطفا با برنامه نویس ارشد تماس نمایید .');



    }
}
