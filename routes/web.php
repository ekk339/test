<?php

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
    return view('layouts.home'); 
});

Route::get('/buy', function () {
    return view('layouts.buy'); 
});

Route::get('/listproduct', function () {
    return view('layouts.listproduct'); 
});

Route::get('/product', function () {
    return view('layouts.product'); 
});

Route::get('/datasell', function () {
    return view('layouts.datasell'); 
});

Route::get('/declare', function () {
    return view('layouts.declare'); 
});

