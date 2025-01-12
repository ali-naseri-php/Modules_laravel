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
            $searchService =$searchService->search($request->name);
        }
        elseif ($request->value ==='category'){
            $searchService=app(SearchWithWhereServices::class);
            $searchService =$searchService->search($request->name,'category');
        }
        elseif ($request->value ==='article'){
            $searchService=app(SearchWithWhereServices::class);
            $searchService =  $searchService->search($request->name,'article');
        }
        else{
            $searchService=app(SearchWithWhereServices::class);
            $searchService =  $searchService->search($request->name,'product');
        }
//        return view('', ['searchs' => $searchService->all()]);
 return redirect()->back()->with(['searchs' => $searchService->all()]);
    }

}
