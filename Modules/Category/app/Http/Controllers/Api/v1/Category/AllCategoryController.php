<?php

namespace Modules\Category\Http\Controllers\Api\v1\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Category\Services\Category\AllCategoryServics;

class AllCategoryController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/v1/category",
     *     operationId="allCategory",
     *     tags={"category"},
     *     summary="Get all categories",
     *     description="Fetch all categories with pagination support. Use the 'page' parameter in the URL to navigate through pages, e.g., /api/v1/category?page=5.",
     *     @OA\Parameter(
     *         name="page",
     *         in="query",
     *         required=false,
     *         description="Page number for pagination. Example: 5",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful response",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="data",
     *                 type="array",
     *                 @OA\Items(type="object",
     *                     @OA\Property(property="id", type="integer"),
     *                     @OA\Property(property="name", type="string"),
     *                     @OA\Property(property="parent_category", type="integer"),
     *                     @OA\Property(property="created_at", type="string", format="date-time", nullable=true),
     *                     @OA\Property(property="updated_at", type="string", format="date-time", nullable=true),
     *                     @OA\Property(property="deleted_at", type="string", format="date-time", nullable=true),
     *                     @OA\Property(property="images", type="string")
     *                 )
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Validation error"
     *     )
     * )
     */
    public function __invoke(AllCategoryServics $allCategoryServics,Request $request)
    {
  $data= $allCategoryServics->all_category($request->page);
  return response()->json(['data'=>$data->all() ],200);

    }
}
