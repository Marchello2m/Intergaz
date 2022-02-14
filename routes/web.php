<?php

use App\Http\Controllers\AddressesController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\DeliveriesController;
use App\Http\Controllers\DeliveryLinesController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\OrderTypesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

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




Route::get('/', function () {
    return view('home');
});
Route::get('/',[ClientsController::class,'show']);


Route::get('/types', function () {
    return view('order-types');
});
Route::get('/types',[OrderTypesController::class,'order']);


Route::get('/last-delivery', function () {
    return view('last-delivery');
});
Route::get('/inactive-clients', function () {
    return view('inactive-clients');
});



Route::get('/client/{id}',[DeliveriesController::class,'getOne']);






Route::get('/last-delivery',[DeliveriesController::class,'showAll']);
Route::get('/inactive-clients',[DeliveryLinesController::class,'noLiquid']);




