<?php

namespace Modules\Article\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Article\Http\Requests\StoreArticleRequest;
use Modules\Article\Services\StoreArticleServices;

class StoreController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request ,StoreArticleServices $storeArticleServices )
    {
        $storeArticleServices->store();
        dd('controller');


    }


}
