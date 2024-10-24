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
    Route::put('',function (){
        dd('ali naseri');
    })->name('kala.update');
    Route::get('edite/{id}',\Modules\ProductManagement\Livewire\Kala\EditeKala::class)->name('kala.edite');
});
