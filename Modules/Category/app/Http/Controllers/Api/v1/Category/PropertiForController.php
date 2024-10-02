<?php

namespace Modules\Category\Http\Controllers\Api\v1\Category;

use App\Http\Controllers\Controller;
use Modules\Category\Services\Category\PropertieForCategoryServics;


class PropertiForController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/v1/category/properti/{id}",
     *     operationId="getCategoryProperties",
     *     tags={"category"},
     *     summary="Get properties by category ID",
     *     description="Fetch all properties for a specific category. Replace {id} with the category ID (e.g., /api/v1/category/properti/2). You can use the `page` query parameter for pagination.",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID of the category to fetch properties for",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Parameter(
     *         name="page",
     *         in="query",
     *         required=false,
     *         description="Page number for pagination",
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
     *                     @OA\Property(property="id_category", type="integer"),
     *                     @OA\Property(property="created_at", type="string", format="date-time", nullable=true),
     *                     @OA\Property(property="updated_at", type="string", format="date-time", nullable=true),
     *                     @OA\Property(property="deleted_at", type="string", format="date-time", nullable=true)
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

    public function __invoke(PropertieForCategoryServics $propertieForCategory)
    {
        $data=$propertieForCategory->all_properties();
        return response()->json([['data'=>$data->all()]]);
    }
}
