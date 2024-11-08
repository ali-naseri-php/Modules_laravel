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
    Route::get('', \Modules\ProductDisplay\Livewire\Kala\IndexKala::class);
    Route::get('/{id}', \Modules\ProductDisplay\Livewire\KalaCategory\AllKalaNoPropertis::class)->name('kala.id.properties.no')->middleware('check.properties');
    Route::get('/{id}/propertis', \Modules\ProductDisplay\Livewire\KalaCategory\AllKalaWithPropertis::class)->name('kala.id.properties.with');

});
