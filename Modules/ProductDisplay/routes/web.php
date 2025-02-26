<?php

use Illuminate\Support\Facades\Route;
use Modules\ProductDisplay\Http\Controllers\ProductDisplayController;


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
    Route::resource('productdisplay', ProductDisplayController::class)->names('productdisplay');
});
Route::prefix('kala')->group(function () {
    Route::get('', \Modules\ProductDisplay\Livewire\Kala\IndexKala::class)->name('kala');
    Route::get('/{id_category}', Modules\ProductDisplay\Livewire\KalaNoPropertis\AllKalaNoPropertis::class)->name('kala.id.properties.no');
    Route::get('show/{id}', \Modules\ProductDisplay\Livewire\ShowProduct::class)->name('show.product');


    Route::get('/{id_category}/propertis', \Modules\ProductDisplay\Livewire\KalaWithPropertis\AllKalaWithPropertis::class)->name('kala.id.properties.with')->middleware('check.properties');


});
