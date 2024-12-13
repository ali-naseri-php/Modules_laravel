<?php

namespace Modules\Account\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Modules\Account\Http\Requests\LoginRequest;
use Modules\Account\Http\Requests\RegisterRequest;
use Modules\Account\Http\Requests\StorePernissionRequest;
use Modules\Account\Http\Requests\StoreRoleRequest;
use Modules\Account\Models\Role;
use Modules\Account\Models\User;
use Modules\Account\Services\StorePermissionServics;
use Modules\Account\Services\StoreRoleServics;
use Modules\Category\Services\Propertie\StorePropertieServices;
use phpDocumentor\Reflection\DocBlock\Description;

//use Illuminate\Support\Facades\Hash;

class StorePermissionController extends Controller
{
    public function __construct()
    {
        if (!Gate::allows('store', Role::class)) {
            return abort(403);
        }
    }

    /**
     * Display a listing of the resource.
     */
    public function __invoke(StorePernissionRequest $request, StorePermissionServics $services)
    {
        $statos = $services->store($request->name);
        if ($statos == 1)
            return redirect('/')->with('success', 'ذخیره‌سازی با موفقیت انجام شد.');
        else
            return redirect('/')->with('success', 'ذخیره‌سازی انجام نشد. لطفاً دوباره تلاش کنید لطفا با برنامه نویس ارشد تماس نمایید .');

    }
}
