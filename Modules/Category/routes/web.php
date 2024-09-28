<?php

use Illuminate\Support\Facades\Route;
use Modules\Category\Http\Controllers\CategoryController;


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

//Route::group([], function () {
//    Route::resource('category', CategoryController::class)->names('category');
//});

Route::prefix('category')->group(function () {
    Route::get('/', \Modules\Category\Livewire\Category\AllCategory::class)->name('category');
    Route::get('/new', \Modules\Category\Livewire\Category\CreateShowCategory::class)->name('category.new');
    Route::get('/create/{id}', \Modules\Category\Livewire\Category\CreateCategory::class)->name('category.create');
    Route::get('/propertie/{category}', \Modules\Category\Livewire\Category\PropertieForCategory::class)->middleware();
    Route::get('/{id}/edite', \Modules\Category\Livewire\Category\EditeCategory::class)->middleware();
    Route::post('/', \Modules\Category\Http\Controllers\Category\StoreCategoryController::class)->name('category.store');
    Route::put('/', \Modules\Category\Http\Controllers\Category\UpdateCategoryController::class)->name('category.update');
    Route::delete('/{id}', \Modules\Category\Http\Controllers\Category\UpdateCategoryController::class)->name('category.delete');


});
Route::prefix('propertie')->group(function () {

    Route::get('/', \Modules\Category\Livewire\Propertie\AllPropertie::class)->name('propertie');
    Route::get('/new', \Modules\Category\Livewire\Propertie\CreatePropertie::class);
    Route::get('/create/{id}', \Modules\Category\Livewire\Propertie\CreatePropertie::class);
    Route::get('/{id}/edite', \Modules\Category\Livewire\Propertie\EditePropertie::class);
    Route::post('/',\Modules\Category\Http\Controllers\Propertie\StorePropertieController::class)->name('propertie.crate');
    Route::put('/',\Modules\Category\Http\Controllers\Propertie\UpdatePropertieController::class)->name('propertie.update');
    Route::delete('/{id}',\Modules\Category\Http\Controllers\Propertie\UpdatePropertieController::class)->name('propertie.update');

});







