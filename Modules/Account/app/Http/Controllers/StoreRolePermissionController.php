<?php

namespace Modules\Account\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Modules\Account\Http\Requests\StoreRolePermissionRequest;
use Modules\Account\Models\RolePermission;
use Modules\Account\Services\StoreRolePermissionServics;

//use Illuminate\Support\Facades\Hash;

class StoreRolePermissionController extends Controller
{

    public function __construct()
    {
        if (!Gate::allows('store', RolePermission::class)) {
            return abort(403);
        }
    }
    /**
     * Display a listing of the resource.
     */
    public function __invoke(StoreRolePermissionRequest $request, StoreRolePermissionServics $services)
    {
        $statos = $services->store($request->all());
        if ($statos == 1)
            return redirect('/')->with('success', 'ذخیره‌سازی با موفقیت انجام شد.');
        else
            return redirect('/')->with('success', 'ذخیره‌سازی انجام نشد. لطفاً دوباره تلاش کنید لطفا با برنامه نویس ارشد تماس نمایید .');

    }
}
