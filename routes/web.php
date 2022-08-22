<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\FillingController;
use App\Http\Controllers\BuffingController;
use App\Http\Controllers\PrePolishController;
use App\Http\Controllers\SettindController;
use App\Http\Controllers\WorkersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CustomersController;

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

Route::get('login',[AuthController::class, 'index'])->name('login');
Route::post('login',[AuthController::class, 'Login'])->name('login');
Route::get('logout',[AuthController::class, 'Logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('dashboard',[DashboardController::class, 'index']);

    Route::get('orderform',[OrdersController::class, 'orderform']);
    Route::post('orderform',[OrdersController::class, 'orderupload']);
    Route::get('orderhistory',[OrdersController::class, 'orderhistory']);
    Route::get('orderstatus',[OrdersController::class, 'orderstatus']);

    Route::get('fillinghistory',[FillingController::class, 'fillinghistory']);
    Route::get('fillingform',[FillingController::class, 'fillingform']);

    Route::get('buffinghistory',[BuffingController::class, 'buffinghistory']);

    Route::get('prepolish',[PrePolishController::class, 'prepolish']);

    Route::get('setting',[SettindController::class, 'setting']);

    Route::get('workers',[WorkersController::class, 'workers']);

    Route::get('products',[ProductsController::class, 'products']);

    Route::get('customers',[CustomersController::class, 'customers']);
});
