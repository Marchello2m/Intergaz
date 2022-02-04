<?php

use App\Http\Controllers\AddressesController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [FrontController::class, 'home'])->name('home');
Route::get('client-delivery', [FrontController::class, 'clientDelivery'])->name('client-delivery');
Route::get('order-types', [FrontController::class, 'orderTypes'])->name('order-types');
Route::get('last-delivery', [FrontController::class, 'lastDelivery'])->name('last-delivery');
Route::get('inactive-clients', [FrontController::class, 'inactiveClients'])->name('inactive-clients');


Route::get('/home',[ClientsController::class,'show']);
