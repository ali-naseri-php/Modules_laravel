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
})->middleware('test');

Route::prefix('articles')->group(function () {
    Route::get('/new', \Modules\Article\Livewire\CreateArticle::class);
    Route::get('/', function () {
        dd('ok');
    })->name('articles.index');
    Route::post('/', \Modules\Article\Http\Controllers\StoreArticleController::class)->name('articles.store');
    Route::get('/edite/{id}', \Modules\Article\Livewire\EditeArticle::class)->name('articles.edite');
    Route::put('/', \Modules\Article\Http\Controllers\UpdateArticleController::class)->name('articles.update');
});
