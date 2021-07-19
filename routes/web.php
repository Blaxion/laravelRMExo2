<?php

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

Route::get('/', function () {
    return view('view1');
})->name('route1');

Route::get('/view2', function () {
    return view('pages.view2');
})->name('route2');

Route::get('/view3', function () {
    return view('pages.view3');
})->name('route3');
