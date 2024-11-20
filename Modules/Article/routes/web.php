<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\Article\Http\Controllers\ArticleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group([], function () {
    Route::resource('article', ArticleController::class)->names('article');
});

Route::prefix('articles')->group(function () {
    Route::get('/new',\Modules\Article\Livewire\CreateArticle::class);
    Route::post('/',function (Request $request){

//        dd($request->image);


    })->name('articles.store');
});
