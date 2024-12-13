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
    Route::get('/new', \Modules\Article\Livewire\CreateArticle::class)->middleware('auth');;
    Route::get('/', function () {
        dd('ok');
    })->name('articles.index');
    Route::post('/', \Modules\Article\Http\Controllers\StoreArticleController::class)->name('articles.store')->middleware('auth');;
    Route::get('/edite/{id}', \Modules\Article\Livewire\EditeArticle::class)->name('articles.edite')->middleware('auth');;
    Route::put('/', \Modules\Article\Http\Controllers\UpdateArticleController::class)->name('articles.update')->middleware('auth');;
    Route::delete('/', \Modules\Article\Http\Controllers\DeleteArticleController::class)->name('articles.delete')->middleware('auth');;
});
