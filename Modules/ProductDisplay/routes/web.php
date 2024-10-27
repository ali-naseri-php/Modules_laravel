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
