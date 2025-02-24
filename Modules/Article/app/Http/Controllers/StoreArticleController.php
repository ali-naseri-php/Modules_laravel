<?php

namespace Modules\Article\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;
use Modules\Article\Http\Requests\StoreArticleRequest;
use Modules\Article\Models\Article;
use Modules\Article\Services\StoreArticleServices;

class StoreArticleController extends Controller
{

    use AuthorizesRequests;
    /**
     * Store a newly created resource in storage.
     */
    public function __invoke(StoreArticleRequest $request ,StoreArticleServices $storeArticleServices )
    {
        $this->authorize('store', Article::class);
        $statos=$storeArticleServices->store();
        if ($statos == 1)
            return redirect()->route('articles.index')->with('success', 'ذخیره‌سازی با موفقیت انجام شد.');
        else
            return redirect()->route('articles.index')->with('success', 'ذخیره‌سازی انجام نشد. لطفاً دوباره تلاش کنید لطفا با برنامه نویس ارشد تماس نمایید .');

    }


}
