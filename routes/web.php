<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\FillingController;
use App\Http\Controllers\BuffingController;
use App\Http\Controllers\PrePolishController;
use App\Http\Controllers\SettingsController;
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
Route::post('logout',[AuthController::class, 'Logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('dashboard',[DashboardController::class, 'index']);

    Route::get('orderform',[OrdersController::class, 'orderform']);
    Route::post('orderform',[OrdersController::class, 'orderupload']);
    Route::get('orderhistory',[OrdersController::class, 'orderhistory']);
    Route::get('orderstatus',[OrdersController::class, 'orderstatus']);

    Route::get('fillinghistory',[FillingController::class, 'fillinghistory']);
    Route::get('fillingform',[FillingController::class, 'fillingform']);
    Route::post('fillingform',[FillingController::class, 'fillingupload']);

    Route::get('buffinghistory',[BuffingController::class, 'buffinghistory']);
    Route::get('buffingform',[BuffingController::class, 'buffingform']);
    Route::post('buffingform',[BuffingController::class, 'buffingupload']);

    Route::get('prepolish',[PrePolishController::class, 'prepolish']);
    Route::get('prepolishform',[PrePolishController::class, 'prepolishform']);
    Route::post('prepolishform',[PrePolishController::class, 'prepolishupload']);

    Route::get('setting',[SettingsController::class, 'setting']);
    Route::get('settingform',[SettingsController::class, 'settingform']);
    Route::post('settingform',[SettingsController::class, 'settingupload']);

    Route::get('workers',[WorkersController::class, 'workers']);
    Route::get('workerform',[WorkersController::class, 'workerform']);
    Route::post('workerform',[WorkersController::class, 'createworker']);

    Route::get('products',[ProductsController::class, 'products']);
    Route::get('productform',[ProductsController::class, 'productform']);
    Route::post('productform',[ProductsController::class, 'createproduct']);

    Route::get('customers',[CustomersController::class, 'customers']);
    Route::get('customerform',[CustomersController::class, 'customerform']);
    Route::post('customerform',[CustomersController::class, 'createcustomer']);

});
