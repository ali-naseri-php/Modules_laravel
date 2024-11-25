<?php

namespace Modules\Article\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Article\Http\Requests\UpdateArticleRequest;
use Modules\Article\Services\StoreArticleServices;
use Modules\Article\Services\UpdateArticleServices;

class UpdateArticleController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function __invoke(UpdateArticleRequest $request ,UpdateArticleServices $updateArticleServices )
    {
//        dd($request->all());
        $statos=$updateArticleServices->store();
        if ($statos == 1)
            return redirect()->route('articles.index')->with('success', 'ذخیره‌سازی با موفقیت انجام شد.');
        else
            return redirect()->route('articles.index')->with('success', 'ذخیره‌سازی انجام نشد. لطفاً دوباره تلاش کنید لطفا با برنامه نویس ارشد تماس نمایید .');



    }


}
