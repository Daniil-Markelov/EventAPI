<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Web routes for web authentication
Route::get('/login', 'AuthController@showLoginForm');
Route::post('/login', 'AuthController@login');
Route::post('/logout', 'AuthController@logout');


Route::get('/', function () {
    return view('welcome');
});
