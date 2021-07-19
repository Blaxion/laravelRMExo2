<?php

use App\Http\Controllers\v1Controller;
use App\Http\Controllers\v2Controller;
use App\Http\Controllers\v3Controller;
use App\Http\Controllers\XController;
use Illuminate\Support\Facades\Route;

use function Ramsey\Uuid\v1;

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

Route::get('/',[v1Controller::class,'index'])->name('route1');

Route::get('/view2',[v2Controller::class,'index'] )->name('route2');

Route::get('/view3',[v3Controller::class,'index'])->name('route3');

Route::get('/viewX',[XController::class,'index'])->name('routeX');
