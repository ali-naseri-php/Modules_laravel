<?php

use Illuminate\Support\Facades\Route;

/*
 *--------------------------------------------------------------------------
 * API Routes
 *--------------------------------------------------------------------------
 *
 * Here is where you can register API routes for your application. These
 * routes are loaded by the RouteServiceProvider within a group which
 * is assigned the "api" middleware group. Enjoy building your API!
 *
*/

//Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
//    Route::apiResource('category', CategoryController::class)->names('category');
//});

Route::prefix('/v1')->group(function () {

    Route::prefix('/category')->group(function () {
        Route::get('/', \Modules\Category\Http\Controllers\Api\v1\Category\AllCategoryController::class);
        Route::get('/properti/{category}', \Modules\Category\Http\Controllers\Api\v1\Category\PropertiForController::class);

    });
    Route::prefix('/properti')->group(function () {
        Route::get('/', \Modules\Category\Http\Controllers\Api\v1\Properti\AllPropertiController::class);


    });
});





