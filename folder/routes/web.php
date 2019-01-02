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
Route::get('/', 'PageController@login');
Route::get('/loginError', 'PageController@loginError');
Route::get('/home', 'PageController@home');
Route::get('/devices', 'PageController@devices');
Route::get('/users', 'PageController@Users');
Route::get('/node-1', 'PageController@nodeOne');
