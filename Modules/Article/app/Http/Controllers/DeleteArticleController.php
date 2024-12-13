<?php

namespace Modules\Article\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Modules\Article\Http\Requests\DeleteArticleRequest;
use Modules\Article\Http\Requests\UpdateArticleRequest;
use Modules\Article\Models\Article;
use Modules\Article\Services\DeleteArticleServices;
use Modules\Article\Services\StoreArticleServices;
use Modules\Article\Services\UpdateArticleServices;

class DeleteArticleController extends Controller
{
    public function __construct()
    {

        if (!Gate::allows('delete', Article::class)) {
            return abort(403);
        }
    }
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
