<?php

namespace Modules\Article\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Article\Http\Requests\DeleteArticleRequest;
use Modules\Article\Http\Requests\UpdateArticleRequest;
use Modules\Article\Services\DeleteArticleServices;
use Modules\Article\Services\StoreArticleServices;
use Modules\Article\Services\UpdateArticleServices;

class DeleteArticleController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function __invoke(DeleteArticleRequest $request ,DeleteArticleServices $articleServices )
    {
//        dd($request->all());
        $statos=$articleServices->delete($request->id);
        if ($statos == 1)
            return redirect()->route('articles.index')->with('success', 'حذف با موفقیت انجام شد.');
        else
            return redirect()->route('articles.index')->with('success', 'حذف انجام نشد. لطفاً دوباره تلاش کنید یا  لطفا با برنامه نویس ارشد تماس نمایید .');



    }


}
