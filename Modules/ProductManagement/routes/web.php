<?php

use Illuminate\Support\Facades\Route;
use Modules\ProductManagement\Http\Controllers\ProductManagementController;

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
//    Route::resource('productmanagement', ProductManagementController::class)->names('productmanagement');
//});
Route::prefix('kala')->group(function () {
    Route::get('',\Modules\ProductManagement\Livewire\Kala\AllKala::class)->name('kala.index');
    Route::get('new',\Modules\ProductManagement\Livewire\Kala\SelectCategoryForCreateKala::class);
    Route::get('crate',\Modules\ProductManagement\Livewire\Kala\CreateKala::class)->name('kala.crate');
    Route::post('',\Modules\ProductManagement\Http\Controllers\Kala\StoreKalaController::class)->name('kala.store');
    Route::put('/{id}',\Modules\ProductManagement\Http\Controllers\Kala\UpdateKalaController::class)->name('kala.update');
    Route::delete('/{id}',\Modules\ProductManagement\Http\Controllers\Kala\DeleteKalaController::class)->name('kala.delete');
    Route::get('edite/{id}',\Modules\ProductManagement\Livewire\Kala\EditeKala::class)->name('kala.edite');
});
