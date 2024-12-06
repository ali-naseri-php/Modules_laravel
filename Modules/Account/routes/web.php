<?php

use Illuminate\Support\Facades\Route;
use Modules\Account\Http\Controllers\AccountController;

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
    Route::resource('account', AccountController::class)->names('account');
});

Route::get('/login', \Modules\Account\Livewire\FormLogin::class)->name('login.form');
Route::post('/login', \Modules\Account\Http\Controllers\LoginController::class)->name('login');

Route::get('/register', \Modules\Account\Livewire\FormRegister::class)->name('register.form');
Route::post('/register', \Modules\Account\Http\Controllers\RegisterController::class)->name('register');


Route::get('/role/new', \Modules\Account\Livewire\FormRole::class)->name('role.form');
Route::post('/role', \Modules\Account\Http\Controllers\StoreRoleController::class)->name('role');

Route::get('/permission/new', \Modules\Account\Livewire\FormPermission::class)->name('permission.form');
Route::post('/permission', \Modules\Account\Http\Controllers\StorePermissionController::class)->name('permission');

Route::get('/role-permission/new', \Modules\Account\Livewire\FormRolePermission::class)->name('role-permission.form');
Route::post('/role-permission', \Modules\Account\Http\Controllers\StoreRolePermissionController::class)->name('role-permission');

Route::get('/role-user/new', \Modules\Account\Livewire\FormRoleUser::class)->name('role-user.form');
Route::post('/role-user', \Modules\Account\Http\Controllers\StoreRoleUserController::class)->name('role-user');

Route::post('/logout', \Modules\Account\Http\Controllers\LogoutController::class)->name('logout');




