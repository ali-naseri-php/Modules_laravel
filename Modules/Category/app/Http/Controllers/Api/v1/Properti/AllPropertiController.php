<?php

namespace Modules\Category\Http\Controllers\Api\v1\Properti;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Category\Services\Propertie\AllPropertieServies;


class AllPropertiController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/v1/properti",
     *     operationId="allProperti",
     *     tags={"category"},
     *     summary="Get all properties",
     *     description="Fetch all properties with pagination support.",
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
     *                     @OA\Property(property="deleted_at", type="string", format="date-time", nullable=true),
     *                     @OA\Property(property="category", type="object",
     *                         @OA\Property(property="id", type="integer"),
     *                         @OA\Property(property="name", type="string"),
     *                         @OA\Property(property="parent_category", type="integer"),
     *                         @OA\Property(property="created_at", type="string", format="date-time", nullable=true),
     *                         @OA\Property(property="updated_at", type="string", format="date-time", nullable=true),
     *                         @OA\Property(property="deleted_at", type="string", format="date-time", nullable=true),
     *                         @OA\Property(property="images", type="string")
     *                     )
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
    public function __invoke(AllPropertieServies $allPropertieServies, Request $request)
    {
        return response()->json(['data' => $allPropertieServies->all($request->page)->all()], 200);
    }
}
