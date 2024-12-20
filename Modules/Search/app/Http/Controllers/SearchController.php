<?php

namespace Modules\Search\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Search\Http\Requests\SearchRequest;
use Modules\Search\Services\SearchAllServices;
use Modules\Search\Services\SearchWithWhereServices;

class SearchController extends Controller
{
    public function __invoke(SearchRequest $request)
    {
//        dd('ali');
        if (empty($request->value) || $request->value === 'all') {
            // بارگذاری تنبل و استفاده از دیزاین پترن Service Container
            $searchService = app(SearchAllServices::class);
            dd($searchService->search($request->name ));
        }
        elseif ($request->value ==='category'){
            $searchService=app(SearchWithWhereServices::class);
            $searchService->search($request->name,'category');
        }
    }

}
