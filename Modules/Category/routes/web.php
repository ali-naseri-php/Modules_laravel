<?php

use Illuminate\Support\Facades\Route;
use Modules\Category\Http\Controllers\CategoryController;
use Modules\Category\Http\Helper\Category\allcontroller;

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
Route::post('/',\Modules\Category\Http\Controllers\Category\StoreCategoryController::class)->name('category.store');
});
Route::prefix('propertie')->group(function () {

Route::get('/all', \Modules\Category\Livewire\Propertie\AllPropertie::class);


});
